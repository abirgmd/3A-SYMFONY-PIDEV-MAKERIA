<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Entity\Commentaire;
use App\Form\EvaluationType;
use App\Repository\CommentaireRepository;
use App\Form\Commentaire1Type;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ProduitRepository;
use App\Repository\EventRepository;
use App\Repository\CategorieRepository;  // Ajouter le repository des catégories
use App\Entity\Produit;
use App\Entity\Event;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class PageController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_homepage')]
    public function index(): Response

    {
        if ($this->isGranted("ROLE_ADMIN") || $this->isGranted("ROLE_ARTIST")    ) {
            return $this->redirectToRoute('app_dashboard');
        }
        return $this->render('page/index.html.twig');
    }

    #[Route('/about.html', name: 'app_about')]
    public function aboutus(): Response
    {
        return $this->render('page/about.html.twig');
    }

    // Ajoutez la récupération des catégories
    #[Route('/photography.html', name: 'app_produits')]
    public function product(ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response
    {
        $produits = $produitRepository->findAll();
        $categories = $categorieRepository->findAll();  // Récupérer toutes les catégories
        
        return $this->render('page/produit.html.twig', [
            'produits' => $produits,
            'categories' => $categories,  // Passer les catégories au template
        ]);
    }

    #[Route('/login', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('page/register.html.twig');
    }

    #[Route('/blog.html', name: 'app_blog')]
    public function blog(EventRepository $eventRepository): Response
    {
        // Récupérer tous les événements
        $events = $eventRepository->findAll();
    
        // Passer les événements au template
        return $this->render('page/blog.html.twig', [
            'events' => $events,
        ]);
    }
    

    
    #[Route('/contact.html', name: 'app_contact')]
    public function contact(Request $request): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($reclamation);
            $this->entityManager->flush();

            $this->addFlash('success', 'Votre réclamation a été envoyée avec succès !');
            return $this->render('page/contact.html.twig', [
                'form' => $form->createView(),
            ]);
        }

        return $this->render('page/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/detail/{id?1}', name: 'app_detail', methods: ['GET', 'POST'])]
    public function detail(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Retrieve the product
        $produit = $entityManager->getRepository(Produit::class)->find($id);

        if (!$produit) {
            throw $this->createNotFoundException('Produit non trouvé');
        }

        // Create a new evaluation
        $evaluation = new Evaluation();
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        // Handle form submission
        if ($form->isSubmitted() && $form->isValid()) {
            // Associate the evaluation with the product
            $evaluation->setProduit($produit);
            $entityManager->persist($evaluation);
            $entityManager->flush();

            $this->addFlash('success', 'Votre évaluation a été soumise avec succès.');
            return $this->redirectToRoute('app_detail', ['id' => $id]);
        }

        return $this->render('page/detail.html.twig', [
            'form' => $form->createView(),
            'produit' => $produit,
            'evaluations' => $produit->getEvaluations(),  // Display all evaluations
        ]);
    }
    
    #[Route('/bdetail/{id}', name:"app_bdetail")]
public function bdetail(int $id, EventRepository $eventRepository, Request $request, Commentaire1Type $commentaireForm)
{
    // Récupérer l'événement
    $event = $eventRepository->find($id);
    
    if (!$event) {
        throw $this->createNotFoundException('No event found for id '.$id);
    }
    
    // Créer un nouveau commentaire
    $commentaire = new Commentaire();
    $commentaire->setEvent($event);
    
    // Créer le formulaire de commentaire
    $form = $this->createForm(Commentaire1Type::class, $commentaire);
    
    // Traiter la soumission du formulaire
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        // Remplacer getDoctrine() par $this->entityManager
        $this->entityManager->persist($commentaire);
        $this->entityManager->flush();
    
        // Rediriger ou afficher un message de succès
        return $this->redirectToRoute('app_bdetail', ['id' => $id]);
    }
    
    return $this->render('page/blog_detail.html.twig', [
        'event' => $event,
        'commentaireForm' => $form->createView(),
    ]);
}
#[Route('/forum', name: 'app_forum')]
public function forum(MessageRepository $messageRepository): Response
{
    $messages = $messageRepository->findAll();  // Récupère tous les messages

    return $this->render('page/forum.html.twig', [
        'messages' => $messages,  // Passe les messages à la vue
    ]);
} 
#[Route('/dashboard', name: 'app_dashboard')]
public function dashboard(): Response
{
    return $this->render('dashboard.html.twig');
}

}
