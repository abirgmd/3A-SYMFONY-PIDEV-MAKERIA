<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La méthode de paiement est obligatoire")]
    #[Assert\Choice(
        choices: ["Credit Card", "Debit Card", "Paypal"],
        message: "Veuillez choisir une méthode de paiement valide"
    )]
    private ?string $PaymentMethod = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Les détails de la carte sont obligatoires")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z]+ [a-zA-Z]+$/",
        message: "Les détails de la carte doivent contenir le nom et le prénom"
    )]
    private ?string $cardDetails = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le numéro de carte est obligatoire")]
    private ?string $CardNumber = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "La date d'expiration est obligatoire")]
    #[Assert\GreaterThan(
    value: "today",
    message: "La date d'expiration doit être postérieure à aujourd'hui"
    )]
private ?\DateTimeInterface $expiryDate = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le CVV est obligatoire")]
    #[Assert\Regex(
        pattern: "/^\d{3}$/",
        message: "Le CVV doit contenir exactement 3 chiffres"
    )]
    private ?int $CVV = null;

    #[ORM\OneToOne(inversedBy: 'paiement', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Orders $Orders = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }

    public function setPaymentMethod(string $PaymentMethod): static
    {
        $this->PaymentMethod = $PaymentMethod;

        return $this;
    }

    public function getCardDetails(): ?string
    {
        return $this->cardDetails;
    }

    public function setCardDetails(string $cardDetails): static
    {
        $this->cardDetails = $cardDetails;

        return $this;
    }

    public function getCardNumber(): ?string
    {
        return $this->CardNumber;
    }

    public function setCardNumber(string $CardNumber): static
    {
        $this->CardNumber = $CardNumber;

        return $this;
    }

    public function getExpiryDate(): ?\DateTimeInterface
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(\DateTimeInterface $expiryDate): static
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    public function getCVV(): ?int
    {
        return $this->CVV;
    }

    public function setCVV(int $CVV): static
    {
        $this->CVV = $CVV;

        return $this;
    }

    public function getOrders(): ?Orders
    {
        return $this->Orders;
    }

    public function setOrders(Orders $Orders): static
    {
        $this->Orders = $Orders;

        return $this;
    }

}