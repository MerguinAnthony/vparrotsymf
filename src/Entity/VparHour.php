<?php

namespace App\Entity;

use App\Repository\VparHourRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VparHourRepository::class)]
class VparHour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $monday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $tuesday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $wednesday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $thursday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $friday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $saturday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $sunday = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonday(): ?\DateTimeInterface
    {
        return $this->monday;
    }

    public function setMonday(?\DateTimeInterface $monday): self
    {
        $this->monday = $monday;

        return $this;
    }

    public function getTuesday(): ?\DateTimeInterface
    {
        return $this->tuesday;
    }

    public function setTuesday(?\DateTimeInterface $tuesday): self
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    public function getWednesday(): ?\DateTimeInterface
    {
        return $this->wednesday;
    }

    public function setWednesday(?\DateTimeInterface $wednesday): self
    {
        $this->wednesday = $wednesday;

        return $this;
    }

    public function getThursday(): ?\DateTimeInterface
    {
        return $this->thursday;
    }

    public function setThursday(?\DateTimeInterface $thursday): self
    {
        $this->thursday = $thursday;

        return $this;
    }

    public function getFriday(): ?\DateTimeInterface
    {
        return $this->friday;
    }

    public function setFriday(?\DateTimeInterface $friday): self
    {
        $this->friday = $friday;

        return $this;
    }

    public function getSaturday(): ?\DateTimeInterface
    {
        return $this->saturday;
    }

    public function setSaturday(?\DateTimeInterface $saturday): self
    {
        $this->saturday = $saturday;

        return $this;
    }

    public function getSunday(): ?\DateTimeInterface
    {
        return $this->sunday;
    }

    public function setSunday(?\DateTimeInterface $sunday): self
    {
        $this->sunday = $sunday;

        return $this;
    }
}
