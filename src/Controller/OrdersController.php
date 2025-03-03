<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Repository\OrdersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ExportService;

#[Route('/commandes', name: 'app_orders_')]
class OrdersController extends AbstractController
{
    private $exportService;

    public function __construct(ExportService $exportService)
    {
        $this->exportService = $exportService;
    }

    #[Route('/', name: 'index')]
    public function index(EntityManagerInterface $entityManager, PaginatorInterface $paginator, Request $request): Response
    {
        // Retrieve orders for the logged-in user
        $query = $entityManager->getRepository(Orders::class)->findBy([], ['id' => 'DESC']);

        // Pagination
        $orders = $paginator->paginate($query, $request->query->getInt('page', 1), 1);

        return $this->render('orders/index.html.twig', [
            'orders' => $orders,
        ]);
    }

    #[Route('/show/{id}', name: 'show')]
    public function show(OrdersRepository $ordersRepository, $id): Response
    {
        $order = $ordersRepository->find($id);

        // If the order doesn't exist, throw a 404 error
        if (!$order) {
            throw $this->createNotFoundException('Order not found');
        }

        return $this->render('orders/show.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/delete/{id}', name: 'delete', methods: ['POST'])]
    public function delete(OrdersRepository $ordersRepository, EntityManagerInterface $entityManager, $id): Response
    {
        $order = $ordersRepository->find($id);

        // If the order exists, remove it from the database
        if ($order) {
            $entityManager->remove($order);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_orders_index');
    }
    #[Route('/export/{id}', name: 'export')]
    public function export(OrdersRepository $ordersRepository, $id): Response
{
    // Fetch the order by ID
    $order = $ordersRepository->find($id);

    // If the order does not exist, throw a 404 exception
    if (!$order) {
        throw $this->createNotFoundException('Order not found');
    }

    // Use the export service to generate the PDF and return the Response object
    $response = $this->exportService->exportOrderToPdf($order);

    if (!$response instanceof Response) {
        throw new \RuntimeException('Export service did not return a valid response.');
    }

    return $response;
}

}
