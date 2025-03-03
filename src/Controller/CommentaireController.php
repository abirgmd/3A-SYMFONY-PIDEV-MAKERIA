<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\Commentaire1Type;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/commentaire')]
class CommentaireController extends AbstractController
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    #[Route('/{id}', name: 'app_commentaire_show', methods: ['GET'])]
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }
    
    #[Route(name: 'app_commentaire_index', methods: ['GET'])]
    public function index(CommentaireRepository $commentaireRepository, Request $request): Response
    {
        $user = $this->getUser();

        // Pagination
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 5;
        $offset = ($page - 1) * $limit;

        $commentaires = $commentaireRepository->findBy([], null, $limit, $offset);
        $totalCommentaires = $commentaireRepository->count([]);
        $totalPages = ceil($totalCommentaires / $limit);

        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaires,
            'totalPages' => $totalPages,
            'currentPage' => $page,
        ]);
    }

    #[Route('/new', name: 'app_commentaire_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        $commentaire = new Commentaire();

        if ($user) {
            $commentaire->setNomcomment($user->getName());
        }

        $commentaire->setTimecomment(new \DateTime());

        $form = $this->createForm(Commentaire1Type::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return new JsonResponse([
                'success' => true,
                'comment' => [
                    'id' => $commentaire->getId(),
                    'nomcomment' => $commentaire->getNomcomment(),
                    'textCommentaire' => $commentaire->getTextCommentaire(),
                    'timecomment' => $commentaire->getTimecomment()->format('F d, Y H:i'),
                ],
            ]);
        }

        return new JsonResponse(['success' => false, 'message' => 'Échec de l\'ajout du commentaire.'], Response::HTTP_BAD_REQUEST);
    }

    #[Route('/edit/{id}', name: 'app_commentaire_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Commentaire $commentaire,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();

        if (!$commentaire || $commentaire->getUser() !== $user) {
            $this->addFlash('error', 'Vous ne pouvez modifier que vos propres commentaires.');
            return $this->redirectToRoute('app_bdetail', ['id' => $commentaire->getEvent()->getId()]);
        }

        $form = $this->createForm(Commentaire1Type::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Commentaire mis à jour avec succès.');
            return $this->redirectToRoute('app_bdetail', ['id' => $commentaire->getEvent()->getId()]);
        }

        return $this->render('commentaire/edit.html.twig', [
            'form' => $form->createView(),
            'commentaire' => $commentaire,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_commentaire_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Commentaire $commentaire,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();

        if (!$commentaire || $commentaire->getUser() !== $user) {
            $this->addFlash('error', 'Vous ne pouvez supprimer que vos propres commentaires.');
            return $this->redirectToRoute('app_bdetail', ['id' => $commentaire->getEvent()->getId()]);
        }

        if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
            $this->addFlash('success', 'Commentaire supprimé avec succès.');
        }

        return $this->redirectToRoute('app_bdetail', ['id' => $commentaire->getEvent()->getId()]);
    }

    #[Route('/{id}/{action}', name: 'app_commentaire_reaction', methods: ['POST'])]
    public function react(
        int $id,
        string $action,
        CommentaireRepository $commentaireRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $commentaire = $commentaireRepository->find($id);

        if (!$commentaire) {
            return new JsonResponse(['success' => false, 'message' => 'Commentaire introuvable.'], Response::HTTP_NOT_FOUND);
        }

        if ($action === 'like') {
            $commentaire->setLikes($commentaire->getLikes() + 1);
        } elseif ($action === 'dislike') {
            $commentaire->setDislikes($commentaire->getDislikes() + 1);
        } else {
            return new JsonResponse(['success' => false, 'message' => 'Action invalide.'], Response::HTTP_BAD_REQUEST);
        }

        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'likes' => $commentaire->getLikes(),
            'dislikes' => $commentaire->getDislikes(),
        ]);
    }
}
