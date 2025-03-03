<?php

namespace App\Controller;

use App\Entity\Reply;
use App\Form\ReplyType;
use App\Entity\Message;
use App\Repository\ReplyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reply')]
final class ReplyController extends AbstractController
{
    #[Route(name: 'app_reply_index', methods: ['GET'])]
    public function index(ReplyRepository $replyRepository): Response
    {
        return $this->render('reply/index.html.twig', [
            'replies' => $replyRepository->findAll(),
        ]);
    }

    #[Route('/new/{messageId}', name: 'app_reply_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $messageId): Response
    {
        $message = $entityManager->getRepository(Message::class)->find($messageId);
        if (!$message) {
            throw $this->createNotFoundException('Message non trouvé.');
        }

        $reply = new Reply();
        $reply->setMessage($message); // Associer la réponse au message

        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reply);
            $entityManager->flush();

            return $this->redirectToRoute('app_message_show2', ['id' => $message->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reply/new.html.twig', [
            'reply' => $reply,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reply_show', methods: ['GET'])]
    public function show(Reply $reply): Response
    {
        return $this->render('reply/show.html.twig', [
            'reply' => $reply,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reply_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reply $reply, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_message_show2', ['id' => $reply->getMessage()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reply/edit.html.twig', [
            'reply' => $reply,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_reply_delete', methods: ['POST'])]
    public function delete(Request $request, Reply $reply, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reply->getId(), $request->request->get('_token'))) {
            $messageId = $reply->getMessage()->getId();
            $entityManager->remove($reply);
            $entityManager->flush();

            return $this->redirectToRoute('app_message_show2', ['id' => $messageId], Response::HTTP_SEE_OTHER);
        }

        return $this->redirectToRoute('app_reply_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/reply/{id}/delete2', name: 'app_reply_delete2', methods: ['POST'])]
    public function delete2(Request $request, Reply $reply, EntityManagerInterface $entityManager): Response
    {
        // Vérifiez le token CSRF
        if (!$this->isCsrfTokenValid('delete' . $reply->getId(), $request->request->get('_token'))) {
            return $this->json(['success' => false, 'error' => 'Token CSRF invalide.'], 400);
        }
    
        try {
            // Supprimez la réponse
            $entityManager->remove($reply);
            $entityManager->flush();
    
            // Retournez une réponse JSON
            return $this->json(['success' => true]);
        } catch (\Exception $e) {
            // En cas d'erreur, retournez un message d'erreur
            return $this->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
