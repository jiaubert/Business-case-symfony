<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
class Annonce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $referenceAnnonce;

    /**
     * @ORM\Column(type="date")
     */
    private $anneeMiseCirculation;

    /**
     * @ORM\Column(type="integer")
     */
    private $kilometrage;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=2)
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceAnnonce(): ?string
    {
        return $this->referenceAnnonce;
    }

    public function setReferenceAnnonce(string $referenceAnnonce): self
    {
        $this->referenceAnnonce = $referenceAnnonce;

        return $this;
    }

    public function getAnneeMiseCirculation(): ?\DateTimeInterface
    {
        return $this->anneeMiseCirculation;
    }

    public function setAnneeMiseCirculation(\DateTimeInterface $anneeMiseCirculation): self
    {
        $this->anneeMiseCirculation = $anneeMiseCirculation;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
