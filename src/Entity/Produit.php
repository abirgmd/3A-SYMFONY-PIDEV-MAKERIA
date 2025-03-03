<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom du produit ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "Le nom du produit ne doit pas dépasser 255 caractères.")]
    private ?string $nomprod = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description du produit ne peut pas être vide.")]
    #[Assert\Length(max: 255, maxMessage: "La description ne doit pas dépasser 255 caractères.")]
    private ?string $descriptionprod = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Le prix du produit est obligatoire.")]
    #[Assert\Positive(message: "Le prix doit être un nombre positif.")]
    private ?float $prixprod = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Le nombre de produits en stock est obligatoire.")]
    #[Assert\PositiveOrZero(message: "Le stock doit être un nombre positif ou zéro.")]
    private ?int $nombreProduitsEnStock = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La taille du produit est obligatoire.")]
    #[Assert\Choice(choices: ["XS", "S", "M", "L", "XL"], message: "La taille doit être XS, S, M, L ou XL.")]
    private ?string $sizeprod = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Les avantages du produit sont obligatoires.")]
    private ?string $avantages = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Categorie $categorie = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'image large est obligatoire.")]
    #[Assert\Url(message: "Le chemin de l'image large doit être une URL valide.")]
    private ?string $image_large = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La première petite image est obligatoire.")]
    #[Assert\Url(message: "Le chemin de la première petite image doit être une URL valide.")]
    private ?string $image_small1 = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La deuxième petite image est obligatoire.")]
    #[Assert\Url(message: "Le chemin de la deuxième petite image doit être une URL valide.")]
    private ?string $image_small2 = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La troisième petite image est obligatoire.")]
    #[Assert\Url(message: "Le chemin de la troisième petite image doit être une URL valide.")]
    private ?string $image_small3 = null;

    /**
     * @var Collection<int, Evaluation>
     */
    #[ORM\OneToMany(targetEntity: Evaluation::class, mappedBy: 'produit')]
    private Collection $evaluations;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Assert\GreaterThanOrEqual("today", message: "La date de promotion doit être une date future.")]
    private ?\DateTimeInterface $datePromotion = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    #[Assert\NotNull(message: "Le pourcentage de réduction est obligatoire.")]
    #[Assert\Range(min: 1, max: 100, notInRangeMessage: "Le pourcentage doit être entre 1 et 100.")]
     private ?float $reduction = null;
#[ORM\Column(type: 'float', nullable: true)]
private $prixPromo;

#[ORM\Column(type: 'datetime', nullable: true)]
private $promotionExpireAt;

public function getPrixPromo(): ?float
{
    return $this->prixPromo;
}

public function setPrixPromo(?float $prixPromo): self
{
    $this->prixPromo = $prixPromo;

    return $this;
}

public function getPromotionExpireAt(): ?\DateTimeInterface
{
    return $this->promotionExpireAt;
}
public function getReductionPercentage(): ?int
{
    if ($this->prixprod && $this->prixPromo) {
        return round((($this->prixprod - $this->prixPromo) / $this->prixprod) * 100);
    }

    return null;
}
public function setPromotionExpireAt(?\DateTimeInterface $promotionExpireAt): self
{
    $this->promotionExpireAt = $promotionExpireAt;

    return $this;
}
public function getDatePromotion(): ?\DateTimeInterface
{
    return $this->datePromotion;
}

public function setDatePromotion(?\DateTimeInterface $datePromotion): self
{
    $this->datePromotion = $datePromotion;
    return $this;
}

public function getReduction(): ?float
{
    return $this->reduction;
}

public function setReduction(?float $reduction): self
{
    $this->reduction = $reduction;
    return $this;
}

    public function __construct()
    {
        $this->evaluations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomprod(): ?string
    {
        return $this->nomprod;
    }

    public function setNomprod(string $nomprod): static
    {
        $this->nomprod = $nomprod;

        return $this;
    }

    public function getDescriptionprod(): ?string
    {
        return $this->descriptionprod;
    }

    public function setDescriptionprod(string $descriptionprod): static
    {
        $this->descriptionprod = $descriptionprod;

        return $this;
    }

    public function getPrixprod(): ?float
    {
        return $this->prixprod;
    }

    public function setPrixprod(float $prixprod): static
    {
        $this->prixprod = $prixprod;

        return $this;
    }

    public function getNombreProduitsEnStock(): ?int
    {
        return $this->nombreProduitsEnStock;
    }

    public function setNombreProduitsEnStock(int $nombreProduitsEnStock): static
    {
        $this->nombreProduitsEnStock = $nombreProduitsEnStock;

        return $this;
    }

    public function getSizeprod(): ?string
    {
        return $this->sizeprod;
    }

    public function setSizeprod(string $sizeprod): static
    {
        $this->sizeprod = $sizeprod;

        return $this;
    }

    public function getAvantages(): ?string
    {
        return $this->avantages;
    }

    public function setAvantages(string $avantages): static
    {
        $this->avantages = $avantages;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImageLarge(): ?string
    {
        return $this->image_large;
    }

    public function setImageLarge(string $image_large): static
    {
        $this->image_large = $image_large;

        return $this;
    }

    public function getImageSmall1(): ?string
    {
        return $this->image_small1;
    }

    public function setImageSmall1(string $image_small1): static
    {
        $this->image_small1 = $image_small1;

        return $this;
    }

    public function getImageSmall2(): ?string
    {
        return $this->image_small2;
    }

    public function setImageSmall2(string $image_small2): static
    {
        $this->image_small2 = $image_small2;

        return $this;
    }

    public function getImageSmall3(): ?string
    {
        return $this->image_small3;
    }

    public function setImageSmall3(string $image_small3): static
    {
        $this->image_small3 = $image_small3;

        return $this;
    }

    /**
     * @return Collection<int, Evaluation>
     */
    public function getEvaluations(): Collection
    {
        return $this->evaluations;
    }

    public function addEvaluation(Evaluation $evaluation): static
    {
        if (!$this->evaluations->contains($evaluation)) {
            $this->evaluations->add($evaluation);
            $evaluation->setProduit($this);
        }

        return $this;
    }

    public function removeEvaluation(Evaluation $evaluation): static
    {
        if ($this->evaluations->removeElement($evaluation)) {
            // set the owning side to null (unless already changed)
            if ($evaluation->getProduit() === $this) {
                $evaluation->setProduit(null);
            }
        }

        return $this;
    }
}
