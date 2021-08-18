<?php

namespace App\Entity;

use App\Repository\VolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VolRepository::class)
 */
class Vol
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
    private $numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompagny;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDepart;

    /**
     * @ORM\Column(type="date")
     */
    private $dateArrivee;

    /**
     * @ORM\Column(type="time")
     */
    private $heureDepart;

    /**
     * @ORM\Column(type="time")
     */
    private $heureArrivee;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToMany(targetEntity=Ville::class, inversedBy="vols")
     */
    private $villeDepart;

    /**
     * @ORM\ManyToMany(targetEntity=Ville::class, inversedBy="vols")
     */
    private $villeDarivee;

    public function __construct()
    {
        $this->villeDepart = new ArrayCollection();
        $this->villeDarivee = new ArrayCollection();
    }

   
    
    public function getId(): ?int
    {
        return $this->id;

    }
    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNomCompagny(): ?string
    {
        return $this->nomCompagny;
    }

    public function setNomCompagny(string $nomCompagny): self
    {
        $this->nomCompagny = $nomCompagny;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(\DateTimeInterface $heureDepart): self
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }


    public function getHeureArrivee(): ?\DateTimeInterface
    {
        return $this->heureArrivee;
    }

    public function setHeureArrivee(\DateTimeInterface $heureArrivee): self
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection|Ville[]
     */
    public function getVilleDepart(): Collection
    {
        return $this->villeDepart;
    }

    public function addVilleDepart(Ville $villeDepart): self
    {
        if (!$this->villeDepart->contains($villeDepart)) {
            $this->villeDepart[] = $villeDepart;
        }

        return $this;
    }

    public function removeVilleDepart(Ville $villeDepart): self
    {
        $this->villeDepart->removeElement($villeDepart);

        return $this;
    }

    /**
     * @return Collection|Ville[]
     */
    public function getVilleDarivee(): Collection
    {
        return $this->villeDarivee;
    }

    public function addVilleDarivee(Ville $villeDarivee): self
    {
        if (!$this->villeDarivee->contains($villeDarivee)) {
            $this->villeDarivee[] = $villeDarivee;
        }

        return $this;
    }

    public function removeVilleDarivee(Ville $villeDarivee): self
    {
        $this->villeDarivee->removeElement($villeDarivee);

        return $this;
    }

   

    

    

   
   
}
