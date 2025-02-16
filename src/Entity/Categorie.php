<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomcat = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $descriptioncat = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: true)]
    private ?self $categorieParente = null;

    /**
     * @var Collection<int, self>
     */
    #[ORM\OneToMany(mappedBy: 'categorieParente', targetEntity: self::class)]
    private Collection $categories;

    /**
     * @var Collection<int, Produit>
     */
    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Produit::class)]
    private Collection $produits;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcat(): ?string
    {
        return $this->nomcat;
    }

    public function setNomcat(string $nomcat): static
    {
        $this->nomcat = $nomcat;

        return $this;
    }

    public function getDescriptioncat(): ?string
    {
        return $this->descriptioncat;
    }

    public function setDescriptioncat(?string $descriptioncat): static
    {
        $this->descriptioncat = $descriptioncat;

        return $this;
    }

    public function getCategorieParente(): ?self
    {
        return $this->categorieParente;
    }

    public function setCategorieParente(?self $categorieParente): static
    {
        $this->categorieParente = $categorieParente;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(self $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->setCategorieParente($this);
        }

        return $this;
    }

    public function removeCategory(self $category): static
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getCategorieParente() === $this) {
                $category->setCategorieParente(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): static
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): static
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getCategorie() === $this) {
                $produit->setCategorie(null);
            }
        }

        return $this;
    }
}
