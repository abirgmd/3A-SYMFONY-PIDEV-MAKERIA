<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Paiement;
use App\Form\PaiementType;
use App\Repository\OrdersRepository;
use App\Repository\PaiementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MailerService;

#[Route('/paiement')]
final class PaiementController extends AbstractController
{
    #[Route('/', name: 'app_paiement_index')]
    public function index(EntityManagerInterface $entityManager, PaiementRepository $paiementRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $entityManager->getRepository(Paiement::class)->findBy([], ['id' => 'DESC']);

        // Paginate the results
        $paiements = $paginator->paginate(
            $query, 
            $request->query->getInt('page', 1), // Current page number
            5 // Items per page
        );

        return $this->render('paiement/index.html.twig', [
            'paiements' => $paiements, // Pass paginated data
        ]);
    }

    #[Route('/new/{orderId}', name: 'app_paiement_new', methods: ['GET', 'POST'])]
    public function new(MailerService $mailerService, Request $request, EntityManagerInterface $entityManager, OrdersRepository $ordersRepository, $orderId): Response
    {
        $paiement = new Paiement();
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $order = $ordersRepository->find($orderId);
            $paiement->setOrders($order);
            $order->setPaid(true);
            $entityManager->persist($paiement);
            $entityManager->flush();
            
            $mailerService->sendEmail();

            return $this->redirectToRoute('app_paiement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('paiement/new.html.twig', [
            'paiement' => $paiement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_paiement_show', methods: ['GET'])]
    public function show(Paiement $paiement): Response
    {
        return $this->render('paiement/show.html.twig', [
            'paiement' => $paiement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_paiement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Paiement $paiement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_paiement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('paiement/edit.html.twig', [
            'paiement' => $paiement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_paiement_delete', methods: ['POST'])]
    public function delete(Request $request, Paiement $paiement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$paiement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($paiement);
            $entityManager->flush();
            return $this->redirectToRoute('app_paiement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->redirectToRoute('app_paiement_index', [], Response::HTTP_SEE_OTHER);
    }
}
