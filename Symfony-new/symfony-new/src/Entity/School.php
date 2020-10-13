<?php

namespace App\Entity;

use App\Repository\SchoolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Float_;

/**
 * @ORM\Entity(repositoryClass=SchoolRepository::class)
 */
class School
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
     * @ORM\Column(type="datetime")
     */
    private $createdAt;
    /**
     * @ORM\Column (type="float", length=255)
     */
    private $tuition;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Klas", mappedBy="school")
     */
    private $klas;
    /**
     * @ORM\ManyToOne (targetEntity="App\Entity\Country", inversedBy="school")
     */
    private $country;
    /**
     * @ORM\OneToMany (targetEntity="App\Entity\Order", mappedBy="school")
     */
    private $order;


    public function __construct()
    {
        $this->klas = new ArrayCollection();
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
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    public function getTuition()
    {
        return $this->tuition;
    }
    public function setTuition(Float_  $tuition)
    {
        $this->tuition = $tuition;
    }
    public function getKlas(): Collection
    {
        return $this->klas;
    }
    public function getCountry(): ?Country
    {
        return $this->country;
    }
    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }
    public function getOrder(): Collection
    {
        return $this->order;
    }

}
