<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/event')]
final class EventController extends AbstractController
{
    #[Route('/', name: 'app_event_index', methods: ['GET'])]
    public function index(EventRepository $eventRepository, Request $request): Response
    {
        $limit = 3; // Nombre d'événements par page
        $page = max(1, $request->query->getInt('page', 1)); // Page actuelle
        $sortBy = $request->query->get('sortBy', 'id'); // Champ de tri
        $sortOrder = $request->query->get('sortOrder', 'asc'); // Ordre de tri
        $searchQuery = $request->query->get('query', ''); // Requête de recherche
    
        // Validation des champs de tri
        $validSortFields = ['id', 'titreevents', 'descriptionevents'];
        if (!in_array($sortBy, $validSortFields)) {
            $sortBy = 'id';
        }
    
        if (!in_array($sortOrder, ['asc', 'desc'])) {
            $sortOrder = 'asc';
        }
    
        if (!empty($searchQuery)) {
            // Recherche avec le Repository
            $events = $eventRepository->searchEventsByTitleOrDescription($searchQuery);
        } else {
            // Requête classique avec tri et pagination
            $queryBuilder = $eventRepository->createQueryBuilder('e')
                ->orderBy("e.$sortBy", strtoupper($sortOrder))
                ->setFirstResult(($page - 1) * $limit)
                ->setMaxResults($limit);
    
            $events = $queryBuilder->getQuery()->getResult();
        }
    
        // Nombre total d'événements pour la pagination
        $totalEvents = count($events);
        $totalPages = (int)ceil($totalEvents / $limit);
    
        return $this->render('event/index.html.twig', [
            'events' => $events,
            'totalPages' => $totalPages,
            'currentPage' => $page,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
            'searchQuery' => $searchQuery,
        ]);
    }
    
    

    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/event/{id}', name: 'app_event_show')]
    public function show(int $id, EventRepository $eventRepository): Response
    {
        $event = $eventRepository->find($id);
    
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé');
        }
    
        // Retourner la réponse avec l'objet $event
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }
    

    #[Route('/{id}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/participate/{id}', name: 'app_event_participate', methods: ['POST'])]
public function participate(Event $event): JsonResponse
{
    $user = $this->getUser();
    if (!$user) {
        return new JsonResponse(['success' => false, 'error' => 'Utilisateur non connecté'], 403);
    }

    // Simulez l'ajout de la participation
    return new JsonResponse([
        'success' => true,
        'eventTitle' => $event->getTitreevents(),
    ]);
}

#[Route('/unparticipate/{id}', name: 'app_event_unparticipate', methods: ['POST'])]
public function unparticipate(Event $event): JsonResponse
{
    $user = $this->getUser();
    if (!$user) {
        return new JsonResponse(['success' => false, 'error' => 'Utilisateur non connecté'], 403);
    }

    // Simulez la suppression de la participation
    return new JsonResponse([
        'success' => true,
    ]);
}

#[Route('/get-events', name: 'app_event_get_events', methods: ['GET'])]
public function getEvents(EventRepository $eventRepository): JsonResponse
{
    $events = $eventRepository->findAll(); // Récupérer tous les événements

    $eventsArray = array_map(function ($event) {
        return [
            'title' => $event->getTitreevents(),
            'start' => $event->getDateDebut()->format('Y-m-d H:i:s'),
            'end' => $event->getDateFin()->format('Y-m-d H:i:s'),
            'description' => $event->getDescriptionevents(),
            'id' => $event->getId(),
        ];
    }, $events);

    // Debugging pour vérifier la réponse
    dump($eventsArray);
    return new JsonResponse($eventsArray);
}
// src/Controller/EventController.php

#[Route('/stats', name: 'app_event_stats', methods: ['GET'])]
public function stats(EventRepository $eventRepository): Response
{
    $data = $eventRepository->getEventCommentairesCount(); // Appel de la méthode pour récupérer les statistiques

    return $this->render('event/stats.html.twig', [
        'categoryData' => $data
    ]);
}


}
