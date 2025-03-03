<?php

namespace App\Controller;

use App\Entity\Reponses;
use App\Entity\Reclamation;
use App\Form\ReponsesType;
use App\Repository\ReponsesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/reponses')]
class ReponsesController extends AbstractController
{
    #[Route(name: 'app_reponses_index', methods: ['GET'])]
    public function index(ReponsesRepository $reponsesRepository): Response
    {
        return $this->render('reponses/index.html.twig', [
            'reponses' => $reponsesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reponses_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')] // Seuls les administrateurs peuvent créer des réponses
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reponse = new Reponses();
        $reclamationId = $request->query->get('reclamationId');
        if ($reclamationId) {
            $reclamation = $entityManager->getRepository(Reclamation::class)->find($reclamationId);
            if ($reclamation) {
                $reponse->setReclamation($reclamation);
            }
        }
        $reponse->setAdmin($this->getUser());
        $form = $this->createForm(ReponsesType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($reponse);
                $entityManager->flush();
                $this->addFlash('success', 'Réponse ajoutée avec succès !');

                return $this->redirectToRoute('app_reponses_index', [], Response::HTTP_SEE_OTHER);
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Erreur lors de l\'ajout de la réponse.');
            }
        }

        return $this->render('reponses/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reponses_show', methods: ['GET'])]
    public function show(Reponses $reponse): Response
    {
        return $this->render('reponses/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponses_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')] // Seuls les administrateurs peuvent modifier des réponses
    public function edit(Request $request, Reponses $reponse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReponsesType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Réponse mise à jour avec succès !');

                return $this->redirectToRoute('app_reponses_index', [], Response::HTTP_SEE_OTHER);
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Erreur lors de la mise à jour de la réponse.');
            }
        }

        return $this->render('reponses/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reponses_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')] // Seuls les administrateurs peuvent supprimer des réponses
    public function delete(Request $request, Reponses $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reponse->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($reponse);
                $entityManager->flush();
                $this->addFlash('success', 'Réponse supprimée avec succès !');
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Erreur lors de la suppression de la réponse.');
            }
        } else {
            $this->addFlash('danger', 'Token CSRF invalide, suppression annulée.');
        }

        return $this->redirectToRoute('app_reponses_index', [], Response::HTTP_SEE_OTHER);
    }
}
