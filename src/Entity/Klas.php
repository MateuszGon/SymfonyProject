<?php

namespace App\Entity;

use App\Repository\KlasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Collection;

/**
 * @ORM\Entity(repositoryClass=KlasRepository::class)
 */
class Klas
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
    private $Name;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\School", inversedBy="klas")
     */
    private $school;
    /**
     * @ORM\ManyToOne (targetEntity="App\Entity\Niveau", inversedBy="klas")
     */
    private $niveau;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Student", mappedBy="klas")
     */
    private $student;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\KlasHasLes", mappedBy="klas")
     */
    private $klasHasLes;


    public function __construct()
    {
        $this->student = new ArrayCollection();
        $this->klasHasLes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }
    public function getSchool(): ?School
    {
        return $this->school;
    }
    public function setSchool(?School $school): self
    {
        $this->school = $school;

        return $this;
    }
    public function getNiveau(): ?Niveau
    {
        return $this->niveau;
    }

    public function setNiveau(?Niveau $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }


    public function getStudent(): ArrayCollection
    {
        return $this->student;
    }

    public function getKlasHasLes(): ArrayCollection
    {
        return $this->klasHasLes;
    }


}
