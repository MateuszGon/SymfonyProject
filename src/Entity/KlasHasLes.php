<?php

namespace App\Entity;

use App\Repository\KlasHasLesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KlasHasLesRepository::class)
 */
class KlasHasLes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $vervallen;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $opvang;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Klas", inversedBy="klasHasLes")
     */
    private $klas;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Rooster", inversedBy="klasHasLes")
     */
    private $rooster;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Les", inversedBy="klasHasLes")
     */
    private $les;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVervallen(): ?int
    {
        return $this->vervallen;
    }

    public function setVervallen(?int $vervallen): self
    {
        $this->vervallen = $vervallen;

        return $this;
    }

    public function getOpvang(): ?int
    {
        return $this->opvang;
    }

    public function setOpvang(?int $opvang): self
    {
        $this->opvang = $opvang;

        return $this;
    }
    public function getKlas(): ?Klas
    {
        return $this->klas;
    }
    public function setKlas(?Klas $klas): self
    {
        $this->klas = $klas;

        return $this;
    }

    public function getRooster(): ?Rooster
    {
        return $this->rooster;
    }

    public function setRooster(?Rooster $rooster): self
    {
        $this->rooster = $rooster;

        return $this;
    }

    public function getLes(): ?Les
    {
        return $this->les;
    }

    public function setLes(?Les $les): self
    {
        $this->les = $les;

        return $this;
    }



}
