<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cheminAcces;

    /**
     * @ORM\ManyToOne(targetEntity=Annonce::class, inversedBy="images")
     */
    private $annonce;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCheminAcces(): ?string
    {
        return $this->cheminAcces;
    }

    public function setCheminAcces(?string $cheminAcces): self
    {
        $this->cheminAcces = $cheminAcces;

        return $this;
    }

    public function getAnnonce(): ?Annonce
    {
        return $this->annonce;
    }

    public function setAnnonce(?Annonce $annonce): self
    {
        $this->annonce = $annonce;

        return $this;
    }
}
