<?php

namespace App\Entity;

use App\Repository\VparHourRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VparHourRepository::class)]
class VparHour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 24)]
    private ?int $monday = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 24)]
    private ?int $tuesday = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 24)]
    private ?int $wednesday = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 24)]
    private ?int $thursday = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 24)]
    private ?int $friday = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 24)]
    private ?int $saturday = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(min: 0, max: 24)]
    private ?int $sunday = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonday(): ?int
    {
        return $this->monday;
    }

    public function setMonday(?int $monday): static
    {
        $this->monday = $monday;

        return $this;
    }

    public function getTuesday(): ?int
    {
        return $this->tuesday;
    }

    public function setTuesday(?int $tuesday): static
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    public function getWednesday(): ?int
    {
        return $this->wednesday;
    }

    public function setWednesday(?int $wednesday): static
    {
        $this->wednesday = $wednesday;

        return $this;
    }

    public function getThursday(): ?int
    {
        return $this->thursday;
    }

    public function setThursday(?int $thursday): static
    {
        $this->thursday = $thursday;

        return $this;
    }

    public function getFriday(): ?int
    {
        return $this->friday;
    }

    public function setFriday(?int $friday): static
    {
        $this->friday = $friday;

        return $this;
    }

    public function getSaturday(): ?int
    {
        return $this->saturday;
    }

    public function setSaturday(?int $saturday): static
    {
        $this->saturday = $saturday;

        return $this;
    }

    public function getSunday(): ?int
    {
        return $this->sunday;
    }

    public function setSunday(?int $sunday): static
    {
        $this->sunday = $sunday;

        return $this;
    }
}
