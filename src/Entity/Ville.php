<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VilleRepository::class)]
class Ville
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lib_ville = null;

    #[ORM\ManyToOne(inversedBy: 'villes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pays $id_pays = null;

    #[ORM\OneToMany(mappedBy: 'id_ville', targetEntity: Bien::class, orphanRemoval: true)]
    private Collection $biens;

    public function __construct()
    {
        $this->biens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibVille(): ?string
    {
        return $this->lib_ville;
    }

    public function setLibVille(string $lib_ville): static
    {
        $this->lib_ville = $lib_ville;

        return $this;
    }

    public function getIdPays(): ?Pays
    {
        return $this->id_pays;
    }

    public function setIdPays(?Pays $id_pays): static
    {
        $this->id_pays = $id_pays;

        return $this;
    }

    /**
     * @return Collection<int, Bien>
     */
    public function getBiens(): Collection
    {
        return $this->biens;
    }

    public function addBien(Bien $bien): static
    {
        if (!$this->biens->contains($bien)) {
            $this->biens->add($bien);
            $bien->setIdVille($this);
        }

        return $this;
    }

    public function removeBien(Bien $bien): static
    {
        if ($this->biens->removeElement($bien)) {
            // set the owning side to null (unless already changed)
            if ($bien->getIdVille() === $this) {
                $bien->setIdVille(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getLibVille();
    }
}
