<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Form\EvaluationType;
use App\Repository\EvaluationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

#[Route('/evaluation')]
class EvaluationController extends AbstractController
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route(name: 'app_evaluation_index', methods: ['GET'])]
    public function index(EvaluationRepository $evaluationRepository, Request $request): Response
    {
        $user = $this->getUser(); // Récupérer l'utilisateur connecté
        $userEmail = $user ? $user->getEmail() : null;
    
        // Gestion de la pagination
        $page = max(1, $request->query->getInt('page', 1)); // Page actuelle
        $limit = 3; // Nombre d'éléments par page
        $offset = ($page - 1) * $limit; // Décalage pour la pagination
    
        $totalEvaluations = $evaluationRepository->count([]); // Nombre total d'évaluations
        $totalPages = ceil($totalEvaluations / $limit); // Nombre total de pages
    
        $evaluations = $evaluationRepository->findBy([], null, $limit, $offset);
    
        return $this->render('evaluation/index.html.twig', [
            'evaluations' => $evaluations,
            'userEmail' => $userEmail,
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);
    }
    
    #[Route('/new', name: 'app_evaluation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->security->getUser();
        $evaluation = new Evaluation();

        if ($user) {
            $evaluation->setUserName($user->getUsername());
            $evaluation->setUserMail($user->getEmail());
        }

        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$evaluation->getDatePublication()) {
                $evaluation->setDatePublication(new \DateTime());
            }

            $entityManager->persist($evaluation);
            $entityManager->flush();

            $this->addFlash('success', 'Votre évaluation a été soumise avec succès.');
            return $this->redirectToRoute('app_evaluation_index');
        }

        return $this->render('evaluation/new.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/details', name: 'app_evaluation_show', methods: ['GET'])]
    public function show(Evaluation $evaluation): Response
    {
        return $this->render('evaluation/show.html.twig', [
            'evaluation' => $evaluation,
        ]);
    }
    #[Route('/edit/{id}', name: 'app_evaluation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evaluation $evaluation, EntityManagerInterface $entityManager): Response
    {
        $user = $this->security->getUser();
    
        // Vérification de l'utilisateur connecté
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour modifier une évaluation.');
            return $this->redirectToRoute('app_detail');
        }
    
        // Vérification des droits de modification
        if ($evaluation->getUserMail() !== $user->getEmail()) {
            $this->addFlash('error', 'Vous ne pouvez modifier que vos propres évaluations.');
            return $this->redirectToRoute('app_detail');
        }
    
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'L\'évaluation a été mise à jour avec succès.');
    
            // Redirection vers la page de détail du produit
            $produit = $evaluation->getProduit();
            if ($produit) {
                return $this->redirectToRoute('app_detail', ['id' => $produit->getId()]);
            }
    
            // Si aucun produit n'est lié
            $this->addFlash('error', 'Le produit lié à cette évaluation est introuvable.');
            return $this->redirectToRoute('app_detail');
        }
    
        return $this->render('evaluation/edit.html.twig', [
            'form' => $form->createView(),
            'evaluation' => $evaluation,
        ]);
    }
    
    #[Route('/{id}/delete', name: 'app_evaluation_delete', methods: ['POST'])]
    public function delete(Request $request, Evaluation $evaluation = null, EntityManagerInterface $entityManager): Response
    {
        $user = $this->security->getUser();
    
        // Vérification de l'existence de l'évaluation
        if (!$evaluation) {
            $this->addFlash('error', 'L\'évaluation demandée n\'existe pas.');
            return $this->redirectToRoute('app_detail');
        }
    
        // Vérification des droits de suppression
        if ($evaluation->getUserMail() !== $user->getEmail()) {
            $this->addFlash('error', 'Vous ne pouvez supprimer que vos propres évaluations.');
            return $this->redirectToRoute('app_detail');
        }
    
        // Validation du jeton CSRF
        if ($this->isCsrfTokenValid('delete' . $evaluation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($evaluation);
            $entityManager->flush();
            $this->addFlash('success', 'L\'évaluation a été supprimée avec succès.');
    
            // Redirection vers la page de détail du produit
            $produit = $evaluation->getProduit();
            if ($produit) {
                return $this->redirectToRoute('app_detail', ['id' => $produit->getId()]);
            }
    
            // Si aucun produit n'est lié
            $this->addFlash('error', 'Le produit lié à cette évaluation est introuvable.');
            return $this->redirectToRoute('app_detail');
        }
    
        $this->addFlash('error', 'Le jeton CSRF est invalide.');
        return $this->redirectToRoute('app_detail');
    }
    #[Route('/stats', name: 'app_evaluation_stats', methods: ['GET'])]
    public function stats(EvaluationRepository $evaluationRepository): Response
    {
        $data = $evaluationRepository->getEvaluationsCountByProduct();
    
        return $this->render('evaluation/stats.html.twig', [
            'categoryData' => $data
        ]);
    }
    #[Route('/{id}/{action}', name: 'app_commentaire_like_dislike', methods: ['POST'])]
    public function likeDislike(
        evaluation $evaluation,
        string $action,
        EntityManagerInterface $entityManager
    ): Response {
        if ($action === 'like') {
            $evaluation->setLikes($evaluation->getLikes() + 1);
        } elseif ($action === 'dislike') {
            $evaluation->setDislikes($evaluation->getDislikes() + 1);
        } else {
            return $this->json(['success' => false, 'message' => 'Action invalide'], Response::HTTP_BAD_REQUEST);
        }
    
        $entityManager->flush();
    
        return $this->json([
            'success' => true,
            'likes' => $evaluation->getLikes(),
            'dislikes' => $evaluation->getDislikes(),
        ]);
    }

}    