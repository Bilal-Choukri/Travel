<?php

namespace App\Entity;

use App\Repository\LocationDeVoituresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LocationDeVoituresRepository::class)
 */
class LocationDeVoitures
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PriseEnCharge;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Restitution;

   
    /**
     * @ORM\Column(type="datetime")
     */
    private $Date;

    /**
     * @ORM\Column(type="date")
     */
    private $DateRetour;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getPriseEnCharge(): ?string
    {
        return $this->PriseEnCharge;
    }

    public function setPriseEnCharge(string $PriseEnCharge): self
    {
        $this->PriseEnCharge = $PriseEnCharge;

        return $this;
    }

    public function getRestitution(): ?string
    {
        return $this->Restitution;
    }

    public function setRestitution(string $Restitution): self
    {
        $this->Restitution = $Restitution;

        return $this;
    }


    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->DateRetour;
    }

    public function setDateRetour(\DateTimeInterface $DateRetour): self
    {
        $this->DateRetour = $DateRetour;

        return $this;
    }

}
