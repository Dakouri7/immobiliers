<?php

namespace App\Entity;

use App\Repository\TypeBienRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeBienRepository::class)]
class TypeBien
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lib_type_bien = null;

    #[ORM\OneToMany(mappedBy: 'id_type_bien', targetEntity: Bien::class, orphanRemoval: true)]
    private Collection $biens;

    public function __construct()
    {
        $this->biens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibTypeBien(): ?string
    {
        return $this->lib_type_bien;
    }

    public function setLibTypeBien(string $lib_type_bien): static
    {
        $this->lib_type_bien = $lib_type_bien;

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
            $bien->setIdTypeBien($this);
        }

        return $this;
    }

    public function removeBien(Bien $bien): static
    {
        if ($this->biens->removeElement($bien)) {
            // set the owning side to null (unless already changed)
            if ($bien->getIdTypeBien() === $this) {
                $bien->setIdTypeBien(null);
            }
        }

        return $this;
    }
}
