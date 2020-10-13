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
}
