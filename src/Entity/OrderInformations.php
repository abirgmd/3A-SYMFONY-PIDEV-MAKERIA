<?php

namespace App\Entity;

use App\Repository\OrderInformationsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OrderInformationsRepository::class)]
class OrderInformations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La ville est obligatoire")]
    #[Assert\Choice(choices: [
        "tunis", "ariana", "manouba", "nabeul", "ben arous",
        "jendouba", "bizerte", "kef", "béja", "monastir",
        "sousse", "mahdia", "kairaouan", "sfax", "sidi bouzid",
        "gafsa", "kébili", "gabes", "tatouine", "médnine",
        "Kasserine", "tozeur", "Siliana", "Zaghouan"
    ], message: "Veuillez choisir une ville valide")]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le code postal est obligatoire")]
    #[Assert\Regex(
        pattern: "/^\d{4}$/",
        message: "Le code postal doit contenir exactement 4 chiffres"
    )]
    private ?string $codePostal = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'adresse de livraison est obligatoire")]
    private ?string $adresselivraison = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire")]
    #[Assert\Regex(
        pattern: "/^\d{8}$/",
        message: "Le numéro de téléphone doit contenir exactement 8 chiffres"
    )]
    private ?string $NumTel = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'email est obligatoire")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas un email valide")]
    private ?string $email = null;

    #[ORM\OneToOne(inversedBy: 'orderInformations', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false, unique:false)]
    private ?Orders $orders = null;

    // Getters and setters remain unchanged
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;
        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): static
    {
        $this->codePostal = $codePostal;
        return $this;
    }

    public function getAdresselivraison(): ?string
    {
        return $this->adresselivraison;
    }

    public function setAdresselivraison(string $adresselivraison): static
    {
        $this->adresselivraison = $adresselivraison;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->NumTel;
    }

    public function setNumTel(string $NumTel): static
    {
        $this->NumTel = $NumTel;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(Orders $orders): static
    {
        $this->orders = $orders;

        return $this;
    }
}