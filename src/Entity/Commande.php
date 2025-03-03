<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: "Le prix est requis")]
    #[Assert\GreaterThan(
        value: 0,
        message: "Le prix doit être supérieur à 0"
    )]
    private ?float $prix = null;

    #[ORM\Column]
    private ?int $etat_commande = null;

    #[ORM\Column(length: 255)]
    private ?string $methode_paiement = null;

    
    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    #[Assert\Range(
        min: 0,
        max: 100,
        notInRangeMessage: "Le pourcentage de don doit être entre 0 et 100%"
    )]
    private ?float $pourcentage_don = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getEtatCommande(): ?int
    {
        return $this->etat_commande;
    }

    public function setEtatCommande(int $etat_commande): static
    {
        $this->etat_commande = $etat_commande;

        return $this;
    }

    public function getMethodePaiement(): ?string
    {
        return $this->methode_paiement;
    }

    public function setMethodePaiement(string $methode_paiement): static
    {
        $this->methode_paiement = $methode_paiement;

        return $this;
    }

    public function getPourcentageDon(): ?float
    {
        return $this->pourcentage_don;
    }

    public function setPourcentageDon(float $pourcentage_don): static
    {
        $this->pourcentage_don = $pourcentage_don;

        return $this;
    }
}
