<?php

namespace App\Entity;

use App\Repository\ReponsesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ReponsesRepository::class)]
class Reponses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de publication ne peut pas être vide')]
    #[Assert\GreaterThanOrEqual('today', message: 'La date de publication ne peut pas être dans le passé')]
    private ?\DateTimeInterface $dateRep = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le contenu de la réponse est requis.')]
    #[Assert\Length(min: 10, minMessage: 'Le contenu de la réponse doit contenir au moins {{ limit }} caractères')]
    private ?string $contenuRep = null;

    #[ORM\ManyToOne(targetEntity: Reclamation::class, inversedBy: 'reponses')]
    #[ORM\JoinColumn(name: "id_rec_id", referencedColumnName: "id", nullable: false)]
    private ?Reclamation $reclamation = null;


    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "id_admin", referencedColumnName: "id", nullable: true)]
    private ?User $admin = null;
    



    public function __construct()
    {
        $this->dateRep = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRep(): ?\DateTimeInterface
    {
        return $this->dateRep;
    }

    public function setDateRep(\DateTimeInterface $dateRep): static
    {
        $this->dateRep = $dateRep;
        return $this;
    }

    public function getContenuRep(): ?string
    {
        return $this->contenuRep;
    }

    public function setContenuRep(string $contenuRep): static
    {
        $this->contenuRep = $contenuRep;
        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): static
    {
        $this->reclamation = $reclamation;
        return $this;
    }

    public function getAdmin(): ?User
    {
        return $this->admin;
    }

    public function setAdmin(?User $admin): static
    {
        $this->admin = $admin;
        return $this;
    }
}
