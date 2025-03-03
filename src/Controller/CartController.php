<?php
namespace App\Controller;

use App\Entity\Produit; 
use App\Entity\Orders; // Ajouter l'entité Orders
use App\Entity\OrdersDetails;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cart', name: 'cart_')]
class CartController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SessionInterface $session, ProduitRepository $produitRepository)
    {
        $panier = $session->get('panier', []);

        // On initialise des variables
        $data = [];
        $total = 0;

        foreach ($panier as $id => $nombreProduitsEnStock) {
            $produit = $produitRepository->find($id);
            $image_large = $produitRepository->find($id);
            $data[] = [
                'product' => $produit,
                'image' => $image_large,
                'quantity' => $nombreProduitsEnStock
            ];
            $total += $produit->getPrixprod() * $nombreProduitsEnStock;
        }

        return $this->render('cart/index.html.twig', compact('data', 'total'));
    }


    #[Route('/add/{id}', name: 'add')]
    public function add(Produit $product, SessionInterface $session)
    {
        //On récupère l'id du produit
        $id = $product->getId();

        // On récupère le panier existant
        $panier = $session->get('panier', []);

        // On ajoute le produit dans le panier s'il n'y est pas encore
        // Sinon on incrémente sa quantité
        if (empty($panier[$id])) {
            $panier[$id] = 1;
        } else {
            $panier[$id]++;
        }

        $session->set('panier', $panier);

        //On redirige vers la page du panier
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/remove/{id}', name: 'remove')]
    public function remove(Produit $product, SessionInterface $session)
    {
        //On récupère l'id du produit
        $id = $product->getId();

        // On récupère le panier existant
        $panier = $session->get('panier', []);

        // On retire le produit du panier s'il n'y a qu'1 exemplaire
        // Sinon on décrémente sa quantité
        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        }

        $session->set('panier', $panier);

        //On redirige vers la page du panier
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(Produit $product, SessionInterface $session)
    {
        //On récupère l'id du produit
        $id = $product->getId();

        // On récupère le panier existant
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        //On redirige vers la page du panier
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/empty', name: 'empty')]
    public function empty(SessionInterface $session)
    {
        $session->remove('panier');

        return $this->redirectToRoute('cart_index');
    }

    #[Route('/validate', name: 'validate')]
    public function validate(SessionInterface $session, EntityManagerInterface $em, ProduitRepository $produitRepository): Response
    {
/*        if(!$this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('connexion');
        }*/

        $panier = $session->get('panier', []);
        if (empty($panier)) {
            return $this->redirectToRoute('cart_index');
        }


        // Créer une nouvelle commande (Orders)
        $order = new Orders();
        $order->setUsers($this->getUser()); // Associer l'utilisateur connecté
        $order->setReference(uniqid()); // Générer une référence unique pour la commande

        // Parcourir les produits du panier
        foreach ($panier as $id => $quantity) {
            $produit = $produitRepository->find($id);

            if ($produit) {
                // Créer une nouvelle ligne de détail de commande (OrdersDetails)
                $orderDetail = new OrdersDetails();
                $orderDetail->setOrders($order);
                $orderDetail->setProduits($produit);
                $orderDetail->setQuantity($quantity);
                $orderDetail->setPrice($produit->getPrixprod());

                // Ajouter ce détail à la commande
                $em->persist($orderDetail);
            }
        }

        // Sauvegarder la commande
        $em->persist($order);
        $em->flush();

        $session->remove('panier');


        return  $this->redirectToRoute('app_order_informations_new', ['orderId' => $order->getId()]);
    }

}