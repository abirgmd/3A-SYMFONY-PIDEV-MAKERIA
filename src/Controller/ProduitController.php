<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;
use Twig\Environment;

#[Route('/produit')]
final class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository, Request $request): Response
    {
        $limit = 3;
        $page = $request->query->getInt('page', 1);
        $sortBy = $request->query->get('sortBy', 'id');
        $sortOrder = $request->query->get('sortOrder', 'asc');

        // Validation des paramètres
        $validSortFields = ['id', 'nomprod', 'sizeprod', 'prixprod'];
        $sortBy = in_array($sortBy, $validSortFields) ? $sortBy : 'id';
        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'asc';

        $queryBuilder = $produitRepository->createQueryBuilder('p')
            ->orderBy("p.$sortBy", $sortOrder)
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);

        $produits = $queryBuilder->getQuery()->getResult();
        $totalProduits = $produitRepository->count([]);
        $totalPages = ceil($totalProduits / $limit);

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
            'totalPages' => $totalPages,
            'currentPage' => $page,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
        ]);
    }

    #[Route('/pdf', name: 'app_produit_pdf', methods: ['GET'])]
    public function generatePdf(ProduitRepository $produitRepository, Pdf $snappy, Environment $twig): Response
    {
        $produits = $produitRepository->findAll();
        $html = $twig->render('produit/pdf.html.twig', [
            'produits' => $produits,
        ]);
        $pdf = $snappy->getOutputFromHtml($html);
    
        return new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="produits.pdf"',
        ]);
    }
    

    #[Route('/notifications', name: 'app_notifications', methods: ['GET'])]
    public function notifications(): JsonResponse
    {
        $logFile = __DIR__ . '/../../var/logs/produit_historique.log';
        $notifications = [];

        if (file_exists($logFile)) {
            $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $notifications = array_reverse($lines);
        }

        return $this->json([
            'success' => true,
            'data' => $notifications,
        ]);
    }

    private function logAction(string $message): void
    {
        try {
            $logDir = __DIR__ . '/../../var/logs';
            $logFile = $logDir . '/produit_historique.log';
            $filesystem = new Filesystem();

            if (!$filesystem->exists($logDir)) {
                $filesystem->mkdir($logDir, 0755);
            }

            if (!$filesystem->exists($logFile)) {
                $filesystem->touch($logFile);
            }

            $date = new \DateTime();
            file_put_contents($logFile, '[' . $date->format('Y-m-d H:i:s') . '] ' . $message . PHP_EOL, FILE_APPEND);
        } catch (\Exception $e) {
            error_log('Erreur lors de l’écriture dans le fichier de logs : ' . $e->getMessage());
        }
    }
    #[Route('/{id<\d+>}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }


    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($produit);
            $entityManager->flush();

            $this->logAction("Produit ajouté : " . $produit->getNomprod());
            $this->addFlash('success', 'Produit créé avec succès.');

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id<\d+>}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->logAction("Produit modifié : " . $produit->getNomprod());
            $this->addFlash('success', 'Produit modifié avec succès.');

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id<\d+>}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
            $this->logAction("Produit supprimé : " . $produit->getNomprod());
            $entityManager->remove($produit);
            $entityManager->flush();

            $this->addFlash('success', 'Produit supprimé avec succès.');
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
    // src/Controller/ProductController.php
/**
 * @Route("/add-to-favorites/{id}", name="add_to_favorites", methods={"POST"})
 */
public function addToFavorites(Product $product, EntityManagerInterface $em, UserRepository $userRepository)
{
    $user = $this->getUser();
    $user->addFavorite($product);

    $em->flush();

    // Retourner une réponse JSON
    return $this->json(['status' => 'success']);
}
// src/Controller/ProductController.php
/**
 * @Route("/remove-from-favorites/{id}", name="remove_from_favorites", methods={"DELETE"})
 */
public function removeFromFavorites(Product $product, EntityManagerInterface $em, UserRepository $userRepository)
{
    $user = $this->getUser();
    $user->removeFavorite($product);

    $em->flush();

    // Retourner une réponse JSON
    return $this->json(['status' => 'success']);
}

#[Route('/apply-promotion', name: 'app_produit_apply_promotion', methods: ['POST'])]
public function applyPromotion(Request $request, ProduitRepository $produitRepository, EntityManagerInterface $entityManager): Response
{
    $produitIds = $request->request->all('produits');
    $dateReduction = $request->request->get('dateReduction');
    $pourcentageReduction = $request->request->get('dReduction');

    if (empty($produitIds) || !$dateReduction || !$pourcentageReduction) {
        $this->addFlash('error', 'Veuillez remplir tous les champs du formulaire.');
        return $this->redirectToRoute('app_produit_index');
    }

    $produits = $produitRepository->findBy(['id' => $produitIds]);
    $dateReduction = new \DateTime($dateReduction);

    if ($dateReduction <= new \DateTime()) {
        $this->addFlash('error', 'La date de réduction doit être dans le futur.');
        return $this->redirectToRoute('app_produit_index');
    }
    
    foreach ($produits as $produit) {
        $produit->setPrixPromo($produit->getPrixprod() * (1 - $pourcentageReduction / 100));
        $produit->setPromotionExpireAt($dateReduction);
        $entityManager->persist($produit);
    }

    $entityManager->flush();

    return $this->redirectToRoute('app_produit_index');
}

#[Route('/promotions', name: 'app_produit_promotions', methods: ['GET'])]
public function getPromotions(ProduitRepository $produitRepository, EntityManagerInterface $entityManager): Response
{
    $produits = $produitRepository->findAll();
    $promotions = [];
    $now = new \DateTime();

    foreach ($produits as $produit) {
        if ($produit->getPromotionExpireAt() && $produit->getPromotionExpireAt() > $now) {
            $promotions[] = [
                'id' => $produit->getId(),
                'nouveauPrix' => $produit->getPrixPromo(),
            ];
        } elseif ($produit->getPromotionExpireAt() && $produit->getPromotionExpireAt() <= $now) {
            $produit->setPrixPromo(null);
            $produit->setPromotionExpireAt(null);
            $entityManager->persist($produit);
        }
    }

    $entityManager->flush();

    return $this->json(['promotions' => $promotions]);
}

}
