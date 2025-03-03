<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use App\Entity\OrderInformations;
use App\Form\OrderInformationsType;
use App\Repository\OrderInformationsRepository;
use App\Repository\OrdersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/order/informations')]
final class OrderInformationsController extends AbstractController
{
    #[Route(name: 'app_order_informations_index', methods: ['GET'])]
    public function index(
        EntityManagerInterface $entityManager,
        OrderInformationsRepository $orderInformationsRepository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        // Fetching data in descending order
        $query = $entityManager->getRepository(OrderInformations::class)->findBy([], ['id' => 'DESC']);

        // Paginate the query
        $orderInformations = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // Get the current page from request
            5 // Limit results per page
        );

        return $this->render('order_informations/index.html.twig', [
            'order_informations' => $orderInformations, // Pass paginated object
        ]);
    }

    #[Route('/new/{orderId}', name: 'app_order_informations_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        OrdersRepository $ordersRepository,
        $orderId
    ): Response {
        $orderInformation = new OrderInformations();
        $form = $this->createForm(OrderInformationsType::class, $orderInformation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $order = $ordersRepository->find($orderId);
            $orderInformation->setOrders($order);
            $entityManager->persist($orderInformation);
            $entityManager->flush();

            return $this->redirectToRoute('app_paiement_new', ['orderId' => $order->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('order_informations/new.html.twig', [
            'order_information' => $orderInformation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_order_informations_show', methods: ['GET'])]
    public function show(OrderInformations $orderInformation): Response
    {
        return $this->render('order_informations/show.html.twig', [
            'order_information' => $orderInformation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_order_informations_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        OrderInformations $orderInformation,
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(OrderInformationsType::class, $orderInformation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_order_informations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('order_informations/edit.html.twig', [
            'order_information' => $orderInformation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_order_informations_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        OrderInformations $orderInformation,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $orderInformation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($orderInformation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_order_informations_index', [], Response::HTTP_SEE_OTHER);
    }
}
