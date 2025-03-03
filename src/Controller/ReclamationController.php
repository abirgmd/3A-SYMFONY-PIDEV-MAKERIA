<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use Knp\Snappy\Pdf;
use Twig\Environment;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
#[Route('/reclamation')]
final class ReclamationController extends AbstractController
{
    #[Route('/send-test-email')]
public function sendTestEmail(MailerInterface $mailer): Response
{
    $email = (new Email())
        ->from('noreply@example.com')
        ->to('ketataeya71@gmail.com')
        ->subject('Test Email from Symfony')
        ->text('This is a test email sent using Mailtrap.');

    $mailer->send($email);

    return new Response('Email sent!');
}
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAllWithResponses(); // Chargement des réponses

        if (!$reclamations) {
            $this->addFlash('info', 'Aucune réclamation trouvée.');
        }

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations
        ]);
    }
    #[Route('/pdf', name: 'app_reclamation_pdf', methods: ['GET'])]
    public function generatePdf(ReclamationRepository $reclamationRepository, Pdf $snappy, Environment $twig): Response
    {
        $reclamations = $reclamationRepository->findAll();
        $html = $twig->render('reclamation/pdf.html.twig', [
            'reclamations' => $reclamations,
        ]);
        $pdf = $snappy->getOutputFromHtml($html);
    
        return new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="reclamations.pdf"',
        ]);
    }
    
    #[Route('/my', name: 'app_reclamation_my', methods: ['GET'])]
    public function myReclamations(ReclamationRepository $reclamationRepository): Response

    {
        $user =$this->getUser();
        if(!$user){
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à vos réclamations.');
        }
        $reclamations = $reclamationRepository->findBy(['user' => $this->getUser()]);
        dump($reclamations);

        return $this->render('reclamation/my.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {
        if (!$this->getUser()) {
            $this->addFlash('error', 'Vous devez être connecté pour créer une réclamation.');
            return $this->redirectToRoute('app_login');
        }

        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation, [
            'is_admin' => $this->isGranted('ROLE_ADMIN'),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setDateRec(new \DateTime());
            $reclamation->setStatRec('en attente');

            $reclamation->setUser($this->getUser());
            $originalText = $reclamation->getDescriptionRec();
            $fillText = "[bad]";
            $apiUrl = "https://www.purgomalum.com/service/plain?text=" . urlencode($originalText) . "&fill_text=" . urlencode($fillText);
            $filteredText = file_get_contents($apiUrl);
            $badCount = substr_count($filteredText, $fillText);
            if ($badCount > 3) {
                $email = (new Email())
                    ->from('admineya@gmail.com')
                    ->to($this->getUser()->getEmail())
                    ->subject('Réclamation refusée')
                    ->text('Votre réclamation contient trop de mauvais mots et ne peut être enregistrée. Veuillez reformuler votre message.');
                $mailer->send($email);
                $this->addFlash('error', 'Votre réclamation contient trop de mauvais mots et n\'a pas été ajoutée. Un email vous a été envoyé.');
                return $this->redirectToRoute('app_reclamation_new');
            }
            $reclamation->setDescriptionRec($filteredText);

            $entityManager->persist($reclamation);
            $entityManager->flush();

            $this->addFlash('success', 'Réclamation créée avec succès.');
            return $this->redirectToRoute('app_reclamation_my'); 
        }

        return $this->render('reclamation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/show/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation, [
            'is_admin' => $this->isGranted('ROLE_ADMIN'),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Réclamation mise à jour avec succès.');
            return $this->redirectToRoute('app_reclamation_my');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $reclamation->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_reclamation_my');
        }

        try {
            $entityManager->remove($reclamation);
            $entityManager->flush();
            $this->addFlash('success', 'Réclamation supprimée avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la suppression.');
        }

        return $this->redirectToRoute('app_reclamation_my');
    }
    #[Route('/update-status/{id}', name: 'app_reclamation_update_status', methods: ['POST'])]
    public function updateStatus(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['status'])) {
            return new JsonResponse(['error' => 'Status is required'], 400);
        }
        
        $newStatus = $data['status'];
        $allowedStatuses = ['en attente', 'résolu', 'en cours'];
        if (!in_array($newStatus, $allowedStatuses)) {
            return new JsonResponse(['error' => 'Invalid status'], 400);
        }
        
        $reclamation->setStatRec($newStatus);
        $entityManager->flush();
        
        return new JsonResponse(['message' => 'Statut mis à jour'], 200);
    }


#[Route('/stats', name: 'app_reclamation_stats', methods: ['GET'])]
    public function statsView(ReclamationRepository $reclamationRepository): Response
    {
        $statData = $reclamationRepository->getStats();
        
        dump($statData);  

        return $this->render('reclamation/stats.html.twig', [
            'statData' => $statData,
        ]);
    }

    
}
