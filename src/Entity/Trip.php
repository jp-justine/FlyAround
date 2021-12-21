<?php

namespace App\Entity;

use App\Repository\TripRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TripRepository::class)
 */
class Trip
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
    private $fromCity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $toCity;

    /**
     * @ORM\Column(type="integer")
     */
    private $distance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFromCity(): ?string
    {
        return $this->fromCity;
    }

    public function setFromCity(string $fromCity): self
    {
        $this->fromCity = $fromCity;

        return $this;
    }

    public function getToCity(): ?string
    {
        return $this->toCity;
    }

    public function setToCity(string $toCity): self
    {
        $this->toCity = $toCity;

        return $this;
    }

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function setDistance(int $distance): self
    {
        $this->distance = $distance;

        return $this;
    }
}
