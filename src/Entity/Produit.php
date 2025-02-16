<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomprod = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionprod = null;

    #[ORM\Column]
    private ?float $prixprod = null;

    #[ORM\Column]
    private ?int $nombreProduitsEnStock = null;

    #[ORM\Column(length: 255)]
    private ?string $sizeprod = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $avantages = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Categorie $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $image_large = null;

    #[ORM\Column(length: 255)]
    private ?string $image_small1 = null;

    #[ORM\Column(length: 255)]
    private ?string $image_small2 = null;

    #[ORM\Column(length: 255)]
    private ?string $image_small3 = null;

    /**
     * @var Collection<int, Evaluation>
     */
    #[ORM\OneToMany(targetEntity: Evaluation::class, mappedBy: 'produit')]
    private Collection $evaluations;

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
