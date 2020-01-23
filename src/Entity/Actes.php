<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActesRepository")
 */
class Actes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modality;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localization;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $radiopharmaceutical;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dose;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getModality(): ?string
    {
        return $this->modality;
    }

    public function setModality(string $modality): self
    {
        $this->modality = $modality;

        return $this;
    }

    public function getLocalization(): ?string
    {
        return $this->localization;
    }

    public function setLocalization(string $localization): self
    {
        $this->localization = $localization;

        return $this;
    }

    public function getRadiopharmaceutical(): ?string
    {
        return $this->radiopharmaceutical;
    }

    public function setRadiopharmaceutical(string $radiopharmaceutical): self
    {
        $this->radiopharmaceutical = $radiopharmaceutical;

        return $this;
    }

    public function getDose(): ?string
    {
        return $this->dose;
    }

    public function setDose(string $dose): self
    {
        $this->dose = $dose;

        return $this;
    }
}
