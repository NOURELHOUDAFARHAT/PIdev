<?php

namespace App\Entity;

use App\Repository\VisiteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VisiteRepository::class)]
class Visite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateVisite = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'visites')]
    #[ORM\JoinColumn(name:'ref_b',referencedColumnName:'ref_b')]
    private ?Bien $refB = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDateVisite(): ?\DateTimeInterface
    {
        return $this->dateVisite;
    }

    public function setDateVisite(\DateTimeInterface $dateVisite): static
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getRefB(): ?Bien
    {
        return $this->refB;
    }

    public function setRefB(?Bien $refB): static
    {
        $this->refB = $refB;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
