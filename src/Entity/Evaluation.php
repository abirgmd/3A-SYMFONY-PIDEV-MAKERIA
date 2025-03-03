<?php
namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'evaluations')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Produit::class, inversedBy: 'evaluations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $produit = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom d'utilisateur est obligatoire.")]
    #[Assert\Length(max: 255, maxMessage: "Le nom d'utilisateur ne doit pas dépasser 255 caractères.")]
    private ?string $userName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'adresse e-mail est obligatoire.")]
    #[Assert\Email(message: "Veuillez fournir une adresse e-mail valide.")]
    #[Assert\Length(max: 255, maxMessage: "L'adresse e-mail ne doit pas dépasser 255 caractères.")]
    private ?string $userMail = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Le texte de l'évaluation est obligatoire.")]
    private ?string $reviewText = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\NotNull(message: "La note est obligatoire.")]
    #[Assert\Range(min: 1, max: 5, notInRangeMessage: "La note doit être comprise entre {{ min }} et {{ max }}.")]
    private ?int $note = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "La date de publication est obligatoire.")]
    #[Assert\Type(type: \DateTimeInterface::class, message: "La date de publication doit être une instance valide de DateTime.")]
    private ?\DateTimeInterface $datePublication = null;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $likes = 0;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $dislikes = 0;
    public function __construct()
    {
        $this->datePublication = new \DateTime();
    }

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

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;
        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function getUserMail(): ?string
    {
        return $this->userMail;
    }


    public function getReviewText(): ?string
    {
        return $this->reviewText;
    }

    public function setReviewText(string $reviewText): self
    {
        $this->reviewText = $reviewText;
        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(\DateTimeInterface $datePublication): self
    {
        $this->datePublication = $datePublication;
        return $this;
    }
    public function setUserName(string $userName): self
    {
        if ($this->userName !== null && $this->userName !== $userName) {
            throw new \InvalidArgumentException("Le champ 'userName' ne peut pas être modifié.");
        }
    
        $this->userName = $userName;
        return $this;
    }
    
    public function setUserMail(string $userMail): self
    {
        if ($this->userMail !== null && $this->userMail !== $userMail) {
            throw new \InvalidArgumentException("Le champ 'userMail' ne peut pas être modifié.");
        }
    
        $this->userMail = $userMail;
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

}
