<?php

namespace App\Entity;

use App\Repository\DataParkingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataParkingRepository::class)
 */
class DataParking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbVoiture;

    /**
     * @ORM\Column(type="integer")
     */
    private $maxVoiture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeAdmin;

    /**
     * @ORM\Column(type="integer")
     */
    private $enter;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbVoiture(): ?int
    {
        return $this->nbVoiture;
    }

    public function setNbVoiture(int $nbVoiture): self
    {
        $this->nbVoiture = $nbVoiture;

        return $this;
    }

    public function getMaxVoiture(): ?int
    {
        return $this->maxVoiture;
    }

    public function setMaxVoiture(int $maxVoiture): self
    {
        $this->maxVoiture = $maxVoiture;

        return $this;
    }

    public function getCodeAdmin(): ?string
    {
        return $this->codeAdmin;
    }

    public function setCodeAdmin(string $codeAdmin): self
    {
        $this->codeAdmin = $codeAdmin;

        return $this;
    }

    public function getEnter(): ?int
    {
        return $this->enter;
    }

    public function setEnter(int $enter): self
    {
        $this->enter = $enter;

        return $this;
    }
}
