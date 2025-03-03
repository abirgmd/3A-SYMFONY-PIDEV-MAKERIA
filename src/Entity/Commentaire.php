<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'evaluations')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom du commentaire est obligatoire.')]
    #[Assert\Length(
        min: 3,
        minMessage: 'Le nom du commentaire doit comporter au moins {{ limit }} caractères.'
    )]
    private ?string $nomcomment = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: 'La date et l\'heure du commentaire sont obligatoires.')]
    #[Assert\GreaterThanOrEqual(
        value: 'today',
        message: 'La date et l\'heure ne peuvent pas être dans le passé.'
    )]
    private ?\DateTimeInterface $timecomment = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Le texte du commentaire est obligatoire.')]
    #[Assert\Length(
        min: 10,
        minMessage: 'Le texte du commentaire doit comporter au moins {{ limit }} caractères.'
    )]
    private ?string $text_commentaire = null;

    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'commentaires')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'L\'événement associé est obligatoire.')]
    private ?Event $event = null;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $likes = 0;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $dislikes = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getNomcomment(): ?string
    {
        return $this->nomcomment;
    }

    public function setNomcomment(?string $nomcomment): self
    {
        $this->nomcomment = $nomcomment;

        return $this;
    }

    public function getTimecomment(): ?\DateTimeInterface
    {
        return $this->timecomment;
    }

    public function setTimecomment(?\DateTimeInterface $timecomment): self
    {
        $this->timecomment = $timecomment;

        return $this;
    }

    public function getTextCommentaire(): ?string
    {
        return $this->text_commentaire;
    }

    public function setTextCommentaire(?string $text_commentaire): self
    {
        $this->text_commentaire = $text_commentaire;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }

    public function getDislikes(): int
    {
        return $this->dislikes;
    }

    public function setDislikes(int $dislikes): self
    {
        $this->dislikes = $dislikes;

        return $this;
    }
    public function __construct()
{
    $this->likes = 0;
    $this->dislikes = 0;
}

}
