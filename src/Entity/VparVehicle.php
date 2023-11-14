<?php

namespace App\Entity;

use App\Repository\VparVehicleRepository;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: VparVehicleRepository::class)]
#[Vich\Uploadable]
class VparVehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull()]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $brand = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull()]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $model = null;

    #[ORM\Column]
    #[Assert\Positive()]
    #[Assert\Length(min: 4, max: 4)]
    private ?int $year = null;

    #[ORM\Column]
    #[Assert\Positive()]
    #[Assert\Length(min: 1, max: 6)]
    private ?int $mileage = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull()]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $energy = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\Length(min: 10, max: 1000)]
    #[Assert\NotNull()]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\Positive()]
    #[Assert\Length(min: 1, max: 4)]
    private ?int $power = null;

    #[ORM\Column]
    #[Assert\Positive()]
    #[Assert\Length(min: 1, max: 3)]
    private ?int $fiscalpower = null;

    #[ORM\Column]
    #[Assert\Positive()]
    #[Assert\Length(min: 1, max: 10)]
    private ?float $price = null;

    #[Vich\UploadableField(mapping: 'VehiclesImage', fileNameProperty: 'imageName1')]
    private ?File $image1 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName1 = null;

    #[Vich\UploadableField(mapping: 'VehiclesImage', fileNameProperty: 'imageName2')]
    private ?File $image2 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName2 = null;

    #[Vich\UploadableField(mapping: 'VehiclesImage', fileNameProperty: 'imageName3')]
    private ?File $image3 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName3 = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotNull()]
    private ?string $gearbox = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getMileage(): ?int
    {
        return $this->mileage;
    }

    public function setMileage(int $mileage): static
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getEnergy(): ?string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): static
    {
        $this->energy = $energy;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(int $power): static
    {
        $this->power = $power;

        return $this;
    }

    public function getFiscalpower(): ?int
    {
        return $this->fiscalpower;
    }

    public function setFiscalpower(int $fiscalpower): static
    {
        $this->fiscalpower = $fiscalpower;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function setImage1(?File $image1 = null): void
    {
        $this->image1 = $image1;

        if (null !== $image1) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImage1(): ?File
    {
        return $this->image1;
    }

    public function setImageName1(?string $imageName1): void
    {
        $this->imageName1 = $imageName1;
    }

    public function getImageName1(): ?string
    {
        return $this->imageName1;
    }

    public function setImage2(?File $image2 = null): void
    {
        $this->image2 = $image2;

        if (null !== $image2) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImage2(): ?File
    {
        return $this->image2;
    }

    public function setImageName2(?string $imageName2): void
    {
        $this->imageName2 = $imageName2;
    }

    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }

    public function setImage3(?File $image3 = null): void
    {
        $this->image3 = $image3;

        if (null !== $image3) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImage3(): ?File
    {
        return $this->image3;
    }

    public function setImageName3(?string $imageName3): void
    {
        $this->imageName3 = $imageName3;
    }

    public function getImageName3(): ?string
    {
        return $this->imageName3;
    }

    public function getAddDate(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setAddDate(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getGearbox(): ?string
    {
        return $this->gearbox;
    }


    public function setGearbox(string $gearbox): static
    {
        $this->gearbox = $gearbox;

        return $this;
    }
}
