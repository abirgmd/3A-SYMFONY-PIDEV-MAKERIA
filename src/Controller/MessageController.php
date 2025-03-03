<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageType;
use App\Entity\Reply;
use App\Form\ReplyType;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[Route('/message')]
final class MessageController extends AbstractController
{
    #[Route(name: 'app_message_index', methods: ['GET'])]
    public function index(MessageRepository $messageRepository): Response
    {
        return $this->render('message/index.html.twig', [
            'messages' => $messageRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_message_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du fichier image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'), // Chemin vers le dossier public
                        $newFilename
                    );
                    $message->setImage($newFilename); // Sauvegarder le nom du fichier dans l'entité Message
                } catch (FileException $e) {
                    // Gérer l'erreur de téléchargement du fichier
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            }

            // Sauvegarder le message dans la base de données
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('app_forum', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('message/new.html.twig', [
            'message' => $message,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_message_show', methods: ['GET'])]
    public function show(Message $message): Response
    {
        return $this->render('message/show.html.twig', [
            'message' => $message,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_message_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du fichier image (si un nouveau fichier est uploadé)
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'), // Chemin vers le dossier public
                        $newFilename
                    );
                    $message->setImage($newFilename); // Sauvegarder le nom du fichier dans l'entité Message
                } catch (FileException $e) {
                    // Gérer l'erreur de téléchargement du fichier
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            }

            // Mise à jour du message
            $entityManager->flush();

            return $this->redirectToRoute('app_message_show2', ['id' => $message->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('message/edit.html.twig', [
            'message' => $message,
            'form' => $form,
        ]);
    }

    #[Route('/message/{id}/delete', name: 'app_message_delete', methods: ['POST'])]
    public function delete(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$message->getId(), $request->request->get('_token'))) {
            $entityManager->remove($message);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_forum', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/message/{id}/delete2', name: 'app_message_delete2', methods: ['POST'])]
    public function delete2(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$message->getId(), $request->request->get('_token'))) {
            $entityManager->remove($message);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_message_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/message/{id}/reply', name: 'app_message_reply', methods: ['GET', 'POST'])]
    public function reply(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        $reply = new Reply();
        $reply->setMessage($message); // Associer automatiquement la réponse au message

        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reply);
            $entityManager->flush();

            $this->addFlash('success', 'Votre réponse a été ajoutée avec succès !');
            return $this->redirectToRoute('app_message_show2', ['id' => $message->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('page/reply.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/message/{id}', name: 'app_message_show2', methods: ['GET', 'POST'])]
    public function showMessageAndReply(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les réponses associées au message
        $replies = $message->getReplies();
    
        // Créer une nouvelle réponse
        $reply = new Reply();
        $reply->setMessage($message); // Associer automatiquement la réponse au message
    
        // Créer et traiter le formulaire pour la réponse
        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reply);
            $entityManager->flush();
    
            // Si la requête est AJAX, retourner une réponse JSON
            if ($request->isXmlHttpRequest()) {
                return $this->json([
                    'success' => true,
                    'reply' => [
                        'id' => $reply->getId(),
                        'content' => $reply->getContenureply(),
                        'createdAt' => $reply->getCreatedAt()->format('d/m/Y H:i'),
                    ],
                ]);
            }
    
            $this->addFlash('success', 'Votre réponse a été ajoutée avec succès !');
            return $this->redirectToRoute('app_message_show2', ['id' => $message->getId()], Response::HTTP_SEE_OTHER);
        }
    
        // Si la requête est AJAX et que le formulaire est invalide, retourner les erreurs
        if ($request->isXmlHttpRequest() && $form->isSubmitted() && !$form->isValid()) {
            return $this->json([
                'success' => false,
                'errors' => $this->getFormErrors($form),
            ], 400);
        }
    
        return $this->render('message/show2.html.twig', [
            'message' => $message,
            'replies' => $replies,
            'form' => $form->createView(),
        ]);
    }
    
    // Méthode pour récupérer les erreurs du formulaire
    private function getFormErrors(FormInterface $form): array
    {
        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }
        return $errors;
    }
}

