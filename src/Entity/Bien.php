<?php

namespace App\Entity;

use App\Repository\BienRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BienRepository::class)]
class Bien
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'biens')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Statut $id_statut = null;

    #[ORM\ManyToOne(inversedBy: 'biens')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeBien $id_type_bien = null;

    #[ORM\ManyToOne(inversedBy: 'biens')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ville $id_ville = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $situation_geographique = null;

    #[ORM\Column(length: 255)]
    private ?string $superficie = null;

    #[ORM\Column]
    private ?int $montant_bien = null;

    #[ORM\Column]
    private ?int $nbre_pieces = null;

    #[ORM\Column]
    private ?int $nbre_chbres = null;

    #[ORM\Column]
    private ?int $nbre_salon = null;

    #[ORM\Column]
    private ?int $nbre_wc = null;

    #[ORM\Column]
    private ?int $nbre_chbre_auto = null;

    #[ORM\Column]
    private ?int $nbre_chbre_simple = null;

    #[ORM\Column]
    private ?int $nbre_chbre_simple_placards = null;

    #[ORM\Column]
    private ?int $nbre_chbre_dressing = null;

    #[ORM\Column]
    private ?int $nbre_garage = null;

    #[ORM\Column]
    private ?int $nbre_piscine = null;

    #[ORM\Column]
    private ?int $cour_avant = null;

    #[ORM\Column]
    private ?int $cour_arriere = null;

    #[ORM\Column(length: 255)]
    private ?string $image_facade = null;

    #[ORM\Column(length: 255)]
    private ?string $image_salon = null;

    #[ORM\Column(length: 255)]
    private ?string $image_cuisine = null;

    #[ORM\Column(length: 255)]
    private ?string $image_douche_chbre_principale = null;

    #[ORM\Column(length: 255)]
    private ?string $image_chbre_simple1 = null;

    #[ORM\Column(length: 255)]
    private ?string $image_chbre_simple2 = null;

    #[ORM\Column(length: 255)]
    private ?string $image_chbre_simple3 = null;

    #[ORM\Column(length: 255)]
    private ?string $image_douche_chbre_simple1 = null;

    #[ORM\Column(length: 255)]
    private ?string $image_douche_chbre_simple2 = null;

    #[ORM\Column(length: 255)]
    private ?string $image_douche_chbre_simple3 = null;

    #[ORM\Column(length: 255)]
    private ?string $image_douche_visiteur = null;

    #[ORM\Column(length: 255)]
    private ?string $video_bien = null;

    #[ORM\Column(length: 255)]
    private ?string $annee_bien = null;

    #[ORM\Column]
    private ?int $etat_bien = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_saisie = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_modification = null;

    #[ORM\Column(length: 255)]
    private ?string $id_user_saisie = null;

    #[ORM\ManyToOne(inversedBy: 'biens')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $id_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdStatut(): ?Statut
    {
        return $this->id_statut;
    }

    public function setIdStatut(?Statut $id_statut): static
    {
        $this->id_statut = $id_statut;

        return $this;
    }

    public function getIdTypeBien(): ?TypeBien
    {
        return $this->id_type_bien;
    }

    public function setIdTypeBien(?TypeBien $id_type_bien): static
    {
        $this->id_type_bien = $id_type_bien;

        return $this;
    }

    public function getIdVille(): ?Ville
    {
        return $this->id_ville;
    }

    public function setIdVille(?Ville $id_ville): static
    {
        $this->id_ville = $id_ville;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getSituationGeographique(): ?string
    {
        return $this->situation_geographique;
    }

    public function setSituationGeographique(string $situation_geographique): static
    {
        $this->situation_geographique = $situation_geographique;

        return $this;
    }

    public function getSuperficie(): ?string
    {
        return $this->superficie;
    }

    public function setSuperficie(string $superficie): static
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getMontantBien(): ?int
    {
        return $this->montant_bien;
    }

    public function setMontantBien(int $montant_bien): static
    {
        $this->montant_bien = $montant_bien;

        return $this;
    }

    public function getNbrePieces(): ?int
    {
        return $this->nbre_pieces;
    }

    public function setNbrePieces(int $nbre_pieces): static
    {
        $this->nbre_pieces = $nbre_pieces;

        return $this;
    }

    public function getNbreChbres(): ?int
    {
        return $this->nbre_chbres;
    }

    public function setNbreChbres(int $nbre_chbres): static
    {
        $this->nbre_chbres = $nbre_chbres;

        return $this;
    }

    public function getNbreSalon(): ?int
    {
        return $this->nbre_salon;
    }

    public function setNbreSalon(int $nbre_salon): static
    {
        $this->nbre_salon = $nbre_salon;

        return $this;
    }

    public function getNbreWc(): ?int
    {
        return $this->nbre_wc;
    }

    public function setNbreWc(int $nbre_wc): static
    {
        $this->nbre_wc = $nbre_wc;

        return $this;
    }

    public function getNbreChbreAuto(): ?int
    {
        return $this->nbre_chbre_auto;
    }

    public function setNbreChbreAuto(int $nbre_chbre_auto): static
    {
        $this->nbre_chbre_auto = $nbre_chbre_auto;

        return $this;
    }

    public function getNbreChbreSimple(): ?int
    {
        return $this->nbre_chbre_simple;
    }

    public function setNbreChbreSimple(int $nbre_chbre_simple): static
    {
        $this->nbre_chbre_simple = $nbre_chbre_simple;

        return $this;
    }

    public function getNbreChbreSimplePlacards(): ?int
    {
        return $this->nbre_chbre_simple_placards;
    }

    public function setNbreChbreSimplePlacards(int $nbre_chbre_simple_placards): static
    {
        $this->nbre_chbre_simple_placards = $nbre_chbre_simple_placards;

        return $this;
    }

    public function getNbreChbreDressing(): ?int
    {
        return $this->nbre_chbre_dressing;
    }

    public function setNbreChbreDressing(int $nbre_chbre_dressing): static
    {
        $this->nbre_chbre_dressing = $nbre_chbre_dressing;

        return $this;
    }

    public function getNbreGarage(): ?int
    {
        return $this->nbre_garage;
    }

    public function setNbreGarage(int $nbre_garage): static
    {
        $this->nbre_garage = $nbre_garage;

        return $this;
    }

    public function getNbrePiscine(): ?int
    {
        return $this->nbre_piscine;
    }

    public function setNbrePiscine(int $nbre_piscine): static
    {
        $this->nbre_piscine = $nbre_piscine;

        return $this;
    }

    public function getCourAvant(): ?int
    {
        return $this->cour_avant;
    }

    public function setCourAvant(int $cour_avant): static
    {
        $this->cour_avant = $cour_avant;

        return $this;
    }

    public function getCourArriere(): ?int
    {
        return $this->cour_arriere;
    }

    public function setCourArriere(int $cour_arriere): static
    {
        $this->cour_arriere = $cour_arriere;

        return $this;
    }

    public function getImageFacade(): ?string
    {
        return $this->image_facade;
    }

    public function setImageFacade(string $image_facade): static
    {
        $this->image_facade = $image_facade;

        return $this;
    }

    public function getImageSalon(): ?string
    {
        return $this->image_salon;
    }

    public function setImageSalon(string $image_salon): static
    {
        $this->image_salon = $image_salon;

        return $this;
    }

    public function getImageCuisine(): ?string
    {
        return $this->image_cuisine;
    }

    public function setImageCuisine(string $image_cuisine): static
    {
        $this->image_cuisine = $image_cuisine;

        return $this;
    }

    public function getImageDoucheChbrePrincipale(): ?string
    {
        return $this->image_douche_chbre_principale;
    }

    public function setImageDoucheChbrePrincipale(string $image_douche_chbre_principale): static
    {
        $this->image_douche_chbre_principale = $image_douche_chbre_principale;

        return $this;
    }

    public function getImageChbreSimple1(): ?string
    {
        return $this->image_chbre_simple1;
    }

    public function setImageChbreSimple1(string $image_chbre_simple1): static
    {
        $this->image_chbre_simple1 = $image_chbre_simple1;

        return $this;
    }

    public function getImageChbreSimple2(): ?string
    {
        return $this->image_chbre_simple2;
    }

    public function setImageChbreSimple2(string $image_chbre_simple2): static
    {
        $this->image_chbre_simple2 = $image_chbre_simple2;

        return $this;
    }

    public function getImageChbreSimple3(): ?string
    {
        return $this->image_chbre_simple3;
    }

    public function setImageChbreSimple3(string $image_chbre_simple3): static
    {
        $this->image_chbre_simple3 = $image_chbre_simple3;

        return $this;
    }

    public function getImageDoucheChbreSimple1(): ?string
    {
        return $this->image_douche_chbre_simple1;
    }

    public function setImageDoucheChbreSimple1(string $image_douche_chbre_simple1): static
    {
        $this->image_douche_chbre_simple1 = $image_douche_chbre_simple1;

        return $this;
    }

    public function getImageDoucheChbreSimple2(): ?string
    {
        return $this->image_douche_chbre_simple2;
    }

    public function setImageDoucheChbreSimple2(string $image_douche_chbre_simple2): static
    {
        $this->image_douche_chbre_simple2 = $image_douche_chbre_simple2;

        return $this;
    }

    public function getImageDoucheChbreSimple3(): ?string
    {
        return $this->image_douche_chbre_simple3;
    }

    public function setImageDoucheChbreSimple3(string $image_douche_chbre_simple3): static
    {
        $this->image_douche_chbre_simple3 = $image_douche_chbre_simple3;

        return $this;
    }

    public function getImageDoucheVisiteur(): ?string
    {
        return $this->image_douche_visiteur;
    }

    public function setImageDoucheVisiteur(string $image_douche_visiteur): static
    {
        $this->image_douche_visiteur = $image_douche_visiteur;

        return $this;
    }

    public function getVideoBien(): ?string
    {
        return $this->video_bien;
    }

    public function setVideoBien(string $video_bien): static
    {
        $this->video_bien = $video_bien;

        return $this;
    }

    public function getAnneeBien(): ?string
    {
        return $this->annee_bien;
    }

    public function setAnneeBien(string $annee_bien): static
    {
        $this->annee_bien = $annee_bien;

        return $this;
    }

    public function getEtatBien(): ?int
    {
        return $this->etat_bien;
    }

    public function setEtatBien(int $etat_bien): static
    {
        $this->etat_bien = $etat_bien;

        return $this;
    }

    public function getDateSaisie(): ?\DateTimeInterface
    {
        return $this->date_saisie;
    }

    public function setDateSaisie(\DateTimeInterface $date_saisie): static
    {
        $this->date_saisie = $date_saisie;

        return $this;
    }

    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->date_modification;
    }

    public function setDateModification(\DateTimeInterface $date_modification): static
    {
        $this->date_modification = $date_modification;

        return $this;
    }

    public function getIdUserSaisie(): ?string
    {
        return $this->id_user_saisie;
    }

    public function setIdUserSaisie(string $id_user_saisie): static
    {
        $this->id_user_saisie = $id_user_saisie;

        return $this;
    }

    public function getIdUser(): ?Utilisateur
    {
        return $this->id_user;
    }

    public function setIdUser(?Utilisateur $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }
}
