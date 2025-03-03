<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
 use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user')]
final class UserController extends AbstractController
{

    #[Route('/stats' ,name: 'app_user_stats', methods: ['GET'])]
    public function stats(UserRepository $userRepository): Response
    {
        $userCountByBlockStatus = $userRepository->countUsersByBlockStatus();

    // Préparer les données pour le diagramme
    $xData = ['Non bloqués', 'Bloqués']; // Étiquettes
    $yData = [0, 0]; // Valeurs par défaut

    foreach ($userCountByBlockStatus as $status) {
        if ($status['isBlocked']) {
            $yData[1] = $status['userCount']; // Utilisateurs bloqués
        } else {
            $yData[0] = $status['userCount']; // Utilisateurs non bloqués
        }
    }

    // Passer les données au template Twig
    return $this->render('user/stats.html.twig', [
        'xData' => $xData,
        'yData' => $yData,
    ]);
    }

    #[Route(name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository ,MailerInterface $mailer , PaginatorInterface $paginator ,Request $request): Response
    {
    
            $email = (new Email())
                ->from('test@example.com')
                ->to('recipient@example.com')
                ->subject('Test Email via MailDev')
                ->text('This is a test email.');
    
            $mailer->send($email);
    


        $pagination = $paginator->paginate(
            $userRepository->findAll(),
            $request->query->getInt('page', 1),
            2   // items per page
        );

         return $this->render('user/index.html.twig', [
            'users' => $pagination ,
        ]);
    }

     

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request,UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
   
            $imageFile = $form->get('image')->getData();

         if ($imageFile) {
             $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
             $newFilename = $originalFilename . '.' . $imageFile->guessExtension();
 
             try {
                 $imageFile->move(
                     $this->getParameter('upload_user'),
                     $newFilename
                 );
             } catch (FileException $e) {
                 $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                 return $this->redirectToRoute('app_student_group_index_administrateur');
             }
 
             $user->setImage($newFilename);
         } else {
             $user->setImage("default.png");

         }
         // encode the plain password
         $user->setPassword(
             $userPasswordHasher->hashPassword(
                 $user,
                 $form->get('password')->getData()
             )
         );            //affectation de role artist
         $user->setRoles(["ROLE_ARTIST"]);

         
         $entityManager->persist($user);
         $entityManager->flush();

         return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
     }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/new/artist', name: 'app_artist_add', methods: ['GET', 'POST'])]
    public function artist(Request $request, EntityManagerInterface $entityManager ,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
   
               $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '.' . $imageFile->guessExtension();
    
                try {
                    $imageFile->move(
                        $this->getParameter('upload_user'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                    return $this->redirectToRoute('app_student_group_index_administrateur');
                }
    
                $user->setImage($newFilename);
            } else {
                $user->setImage("default.png");

            }
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );            //affectation de role artist
            $user->setRoles(["ROLE_ARTIST"]);
            $user->isBlok(false);

            
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {        $data = 'Name: ' . $user->getName() . ' | Lastname: ' . $user->getLastname() . ' | Email: ' . $user->getEmail();

        $result = Builder::create()
        ->writer(new \Endroid\QrCode\Writer\PngWriter())
        ->data($data)
         ->encoding(new Encoding('UTF-8'))
         ->errorCorrectionLevel(ErrorCorrectionLevel::High)
         ->size(300)
        // ->logoPath($logoPath) // Add logo
         //->logoPunchoutBackground(true)
         ->margin(10)
         ->build();
 
     // Generate a Data URI to include image data inline
     $dataUri = $result->getDataUri();
     

        if ($this->isGranted(["ROLE_ADMIN"])) {
            return $this->render('user/show.html.twig', [
                'user' => $user,
                'qr'=>$dataUri
            ]);        }

            
            return $this->render('user/showclient.html.twig', [
                'user' => $user,
                'qr'=>$dataUri
            ]);

    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}