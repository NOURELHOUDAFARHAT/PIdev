<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numImmatriculation = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(length: 255)]
    private ?string $couleur = null;

    #[ORM\Column]
    private ?bool $disponible = null;

    #[ORM\Column]
    private ?float $prixPerDay = null;

    #[ORM\OneToMany(mappedBy: 'voiture_id', targetEntity: ReservationDesVoitures::class)]
    private Collection $voiture_id;

    public function __construct()
    {
        $this->voiture_id = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumImmatriculation(): ?string
    {
        return $this->numImmatriculation;
    }

    public function setNumImmatriculation(string $numImmatriculation): static
    {
        $this->numImmatriculation = $numImmatriculation;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function isDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): static
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function getPrixPerDay(): ?float
    {
        return $this->prixPerDay;
    }

    public function setPrixPerDay(float $prixPerDay): static
    {
        $this->prixPerDay = $prixPerDay;

        return $this;
    }

    /**
     * @return Collection<int, ReservationDesVoitures>
     */
    public function getvoiture_id(): Collection
    {
        return $this->voiture_id;
    }

    public function addvoiture_id(ReservationDesVoitures $voiture_id): static
    {
        if (!$this->voiture_id->contains($voiture_id)) {
            $this->voiture_id->add($voiture_id);
            $voiture_id->setvoiture_id($this);
        }

        return $this;
    }

    public function removevoiture_id(ReservationDesVoitures $voiture_id): static
    {
        if ($this->voiture_id->removeElement($voiture_id)) {
            // set the owning side to null (unless already changed)
            if ($voiture_id->getvoiture_id() === $this) {
                $voiture_id->setvoiture_id(null);
            }
        }

        return $this;
    }

}
