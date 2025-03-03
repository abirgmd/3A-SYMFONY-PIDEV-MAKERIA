<?php

namespace App\Entity;

use App\Repository\ReplyRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReplyRepository::class)]
class Reply
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Message::class, inversedBy: 'replies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Message $message = null;

    #[ORM\Column(length: 1000)]
    #[Assert\NotBlank(message: "Le contenu de la réponse ne peut pas être vide.")]
    #[Assert\Length(
        min: 3,
        minMessage: "La réponse doit contenir au moins {{ limit }} caractères.",
        max: 1000,
        maxMessage: "La réponse ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $contenureply = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function setMessage(?Message $message): static
    {
        $this->message = $message;
        return $this;
    }

    public function getContenureply(): ?string
    {
        return $this->contenureply;
    }

    public function setContenureply(?string $contenureply): static
    {
        $this->contenureply = $contenureply;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}
