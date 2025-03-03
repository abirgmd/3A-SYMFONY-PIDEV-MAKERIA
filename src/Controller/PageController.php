<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;
use App\Form\EvaluationType;
use App\Form\Commentaire1Type;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ProduitRepository;
use App\Repository\EventRepository;
use App\Repository\CategorieRepository;
use App\Repository\ReclamationRepository;
use App\Entity\Produit;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;

class PageController extends AbstractController
{
    private $entityManager;
    private ReclamationRepository $reclamationRepository;


    public function __construct(EntityManagerInterface $entityManager,        ReclamationRepository $reclamationRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->reclamationRepository = $reclamationRepository;
    }

    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        if ($this->isGranted("ROLE_ADMIN") || $this->isGranted("ROLE_ARTIST")) {
            return $this->redirectToRoute('app_dashboard');
        }
        return $this->render('page/index.html.twig');
    }

    #[Route('/about.html', name: 'app_about')]
    public function aboutus(): Response
    {
        return $this->render('page/about.html.twig');
    }

    #[Route('/photography.html', name: 'app_produits')]
    public function product(
        ProduitRepository $produitRepository,
        CategorieRepository $categorieRepository,
        SessionInterface $session,
        Request $request
    ): Response {
        $categories = $categorieRepository->findAll();
    
        // Pagination
        $page = $request->query->getInt('page', 1); // Page actuelle
        $limit = 6; // Nombre de produits par page
        $offset = ($page - 1) * $limit;
    
        $produits = $produitRepository->findBy([], null, $limit, $offset);
        $totalProduits = $produitRepository->count([]); // Nombre total de produits
        $totalPages = ceil($totalProduits / $limit);
    
        // Récupérer les favoris depuis la session
        $favorites = $session->get('favorites', []);
    
        return $this->render('page/produit.html.twig', [
            'produits' => $produits,
            'categories' => $categories,
            'favorites' => $favorites,
            'totalPages' => $totalPages,
            'currentPage' => $page,
        ]);
    }
    

    #[Route('/login', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('page/register.html.twig');
    }

    #[Route('/blog.html', name: 'app_blog')]
    public function blog(
        EventRepository $eventRepository,
        Request $request
    ): Response {
        // Pagination
        $query = $request->query->get('query', '');
        $events = $eventRepository->findAll(); // Example, replace with your actual query logic

        $page = $request->query->getInt('page', 1); // Page actuelle
        $limit = 6; // Nombre d'événements par page
        $offset = ($page - 1) * $limit;
    
        // Récupération des événements paginés
        $events = $eventRepository->findBy([], null, $limit, $offset);
        $totalEvents = $eventRepository->count([]); // Nombre total d'événements
        $totalPages = ceil($totalEvents / $limit);
    
        return $this->render('page/blog.html.twig', [
            'events' => $events,
            'totalPages' => $totalPages,
            'currentPage' => $page,
            'query' => $query,
        ]);
    }
#[Route('/search-events', name: 'search_events')]
public function searchEvents(Request $request, EventRepository $eventRepository): JsonResponse
{
    $query = $request->query->get('query', '');

    // Rechercher les événements par titre
    $events = $eventRepository->createQueryBuilder('e')
        ->where('e.titreevents LIKE :query')
        ->setParameter('query', '%' . $query . '%')
        ->getQuery()
        ->getResult();

    // Convertir les résultats en tableau pour JSON
    $eventData = array_map(function ($event) {
        return [
            'id' => $event->getId(),
            'titreevents' => $event->getTitreevents(),
            'image1events' => $event->getImage1events(),
        ];
    }, $events);

    return new JsonResponse(['events' => $eventData]);
}

    
    

#[Route('/contact', name: 'app_contact')]
public function contact(Request $request): Response
{
    $reclamation = new Reclamation();
    $reclamation->setDateRec(new \DateTime()); // Définir la date actuelle

    // Assigner l'utilisateur actuel
    $user = $this->getUser();
    $reclamation->setUser($user);

    $form = $this->createForm(ReclamationType::class, $reclamation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $this->entityManager->persist($reclamation);
        $this->entityManager->flush();

        $this->addFlash('success', 'Réclamation envoyée avec succès !');
        return $this->redirectToRoute('reclamation/index.html.twig');
    }

    $reclamations = $this->reclamationRepository->findBy([], ['dateRec' => 'DESC']);

    return $this->render('page/contact.html.twig', [
        'form' => $form->createView(),
        'reclamations' => $reclamations,
        'dateNow' => new \DateTime(), // Passer la date actuelle à la vue
    ]);
}

 
    #[Route('/detail/{id}', name: 'app_detail', methods: ['GET', 'POST'])]
    public function detail(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer le produit par son ID
        $produit = $entityManager->getRepository(Produit::class)->find($id);
    
        if (!$produit) {
            throw $this->createNotFoundException('Produit introuvable.');
        }
    
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour évaluer un produit.');
        }
    
        // Créer une nouvelle instance d'évaluation
        $evaluation = new Evaluation();
        $evaluation->setProduit($produit);
        $evaluation->setUser($user);
    
        // Pré-remplir les champs avec les données de l'utilisateur
        $evaluation->setUserName($user->getName() . ' ' . $user->getLastname()); // Combine nom et prénom
        $evaluation->setUserMail($user->getEmail());
    
        // Créer le formulaire
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);
    
        // Gestion de la soumission du formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evaluation);
            $entityManager->flush();
    
            $this->addFlash('success', 'Votre évaluation a été enregistrée avec succès.');
    
            // Redirection après soumission
            return $this->redirectToRoute('app_detail', ['id' => $id]);
        }
    
        // Récupérer les évaluations liées au produit
        $evaluations = $entityManager->getRepository(Evaluation::class)
            ->findBy(['produit' => $produit]);
    
        // Retourner la vue avec les données
        return $this->render('page/detail.html.twig', [
            'produit' => $produit,
            'evaluations' => $evaluations,
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/bdetail/{id}', name: "app_bdetail", methods: ['GET', 'POST'])]
    public function bdetail(
        int $id,
        EventRepository $eventRepository,
        CommentaireRepository $commentaireRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        // Récupération de l'événement par ID
        $event = $eventRepository->find($id);
    
        if (!$event) {
            throw $this->createNotFoundException("L'événement avec l'ID $id est introuvable.");
        }
    
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException("Vous devez être connecté pour commenter cet événement.");
        }
    
        // Récupération des commentaires associés à cet événement
        $commentaires = $commentaireRepository->findBy(['event' => $event]);
    
        // Créer un nouveau commentaire
        $commentaire = new Commentaire();
        $commentaire->setEvent($event);
        $commentaire->setUser($user);
    
        // Pré-remplir les champs du formulaire
        $commentaire->setNomcomment($user->getName());
    
        $form = $this->createForm(Commentaire1Type::class, $commentaire);
        $form->handleRequest($request);
    
        // Traitement du formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setTimecomment(new \DateTime());
            $entityManager->persist($commentaire);
            $entityManager->flush();
    
            $this->addFlash('success', 'Votre commentaire a été ajouté avec succès.');
    
            // Redirection après soumission
            return $this->redirectToRoute('app_bdetail', ['id' => $id]);
        }
    
        return $this->render('page/blog_detail.html.twig', [
            'event' => $event,
            'commentaires' => $commentaires,
            'commentaireForm' => $form->createView(),
        ]);
    }
    
    
    #[Route('/forum', name: 'app_forum')]
    public function forum(MessageRepository $messageRepository): Response
    {
        $messages = $messageRepository->findAll();

        return $this->render('page/forum.html.twig', [
            'messages' => $messages,
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('dashboard.html.twig');
    }

    #[Route('/success', name: 'success_page')]
    public function success()
   {
    return $this->render('page/success.html.twig');
   }
    #[Route('/add-to-favorites/{id}', name: 'add_to_favorites')]
public function addToFavorites(int $id, ProduitRepository $produitRepository, SessionInterface $session): Response
{
    $produit = $produitRepository->find($id);

    if (!$produit) {
        throw $this->createNotFoundException('Produit introuvable.');
    }

    // Récupérer ou initialiser la liste des favoris
    $favorites = $session->get('favorites', []);

    // Ajouter le produit aux favoris
    $favorites[$id] = [
        'id' => $produit->getId(),
        'nomprod' => $produit->getNomprod(),
        'prixprod' => $produit->getPrixprod(),
    ];

    $session->set('favorites', $favorites);

    return $this->redirectToRoute('app_produits');
}

#[Route('/remove-from-favorites/{id}', name: 'remove_from_favorites')]
public function removeFromFavorites(int $id, SessionInterface $session): Response
{
    // Récupérer ou initialiser la liste des favoris
    $favorites = $session->get('favorites', []);

    // Retirer le produit des favoris
    if (isset($favorites[$id])) {
        unset($favorites[$id]);
    }

    $session->set('favorites', $favorites);

    return $this->redirectToRoute('app_produits');
}
#[Route('/produits/rechercher', name: 'produits_rechercher')]

// Exemple dans un contrôleur Symfony
public function rechercherProduits(Request $request, ProduitRepository $produitRepository): JsonResponse
{
    $query = $request->query->get('query', '');

    // Chercher des produits par nom ou autre critère
    $produits = $produitRepository->createQueryBuilder('p')
        ->where('p.nomprod LIKE :query')
        ->setParameter('query', '%' . $query . '%')
        ->getQuery()
        ->getResult();

    // Format JSON pour chaque produit
    $data = array_map(function ($produit) {
        return [
            'id' => $produit->getId(),
            'nomprod' => $produit->getNomprod(),
            'prixprod' => $produit->getPrixprod(),
            'imageLarge' => $produit->getImageLarge(), // Si nécessaire
        ];
    }, $produits);

    return new JsonResponse($data);
}

/**
 * @Route("/reviews/load", name="reviews_load", methods={"GET"})
 */
public function loadReviews(Request $request, EvaluationRepository $evaluationRepository): JsonResponse
{
    $page = $request->query->getInt('page', 1);
    $limit = 5; // Nombre de critiques par page

    $evaluations = $evaluationRepository->findBy([], null, $limit, ($page - 1) * $limit);
    $totalReviews = count($evaluationRepository->findAll());

    $reviewsData = array_map(function ($evaluation) {
        return [
            'userName' => $evaluation->getUserName(),
            'reviewText' => $evaluation->getReviewText(),
            'note' => $evaluation->getNote(),
            'datePublication' => $evaluation->getDatePublication()->format('Y-m-d H:i:s'),
        ];
    }, $evaluations);

    return new JsonResponse([
        'reviews' => $reviewsData,
        'hasMore' => ($page * $limit) < $totalReviews,
    ]);
}



}
