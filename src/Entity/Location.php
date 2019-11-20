<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle1(): ?string
    {
        return $this->libelle1;
    }

    public function setLibelle1(string $libelle1): self
    {
        $this->libelle1 = $libelle1;

        return $this;
    }

    public function getLibelle2(): ?string
    {
        return $this->libelle2;
    }

    public function setLibelle2(?string $libelle2): self
    {
        $this->libelle2 = $libelle2;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
