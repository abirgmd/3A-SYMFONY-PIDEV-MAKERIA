<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

final class ApiUserController extends AbstractController
{
    #[Route('/api/toggle-user/{id}', name: 'app_toggle_user', methods: ['POST'])]
    public function toggleUser(Request $request, User $user, EntityManagerInterface $entityManager): JsonResponse
    {
        // Ensure the user is logged in and has permission to block/unblock users
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Check if the user exists
        if (!$user) {
            return new JsonResponse(['success' => false, 'message' => 'User not found.'], 404);
        }

        $user->setBlok(!$user->isBlok());
        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse(['success' => true, 'message' => $user->isBlok() ? 'User has been blocked.' : 'User has been unblocked.']);
    }


    #[Route('/api/search-users', name: 'app_user_search', methods: ['GET'])]
public function searchUsers(Request $request, UserRepository $userRepository): JsonResponse
{
    $query = $request->query->get('query', '');  
    $users = $userRepository->searchByQuery($query);  

    $results = [];
    foreach ($users as $user) {
        $results[] = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'roles' => $user->getRoles(),
            'name' => $user->getName(),
            'lastname' => $user->getLastname(),
            'image' => $user->getImage(),
            'blok' => $user->isBlok(),
        ];
    }

    return new JsonResponse($results);
}
}