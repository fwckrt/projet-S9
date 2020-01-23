<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ListeNomRepository")
 */
class ListeNom
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
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birth_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ss_nb;

    /**
     * @ORM\Column(type="integer")
     */
    private $way_nb;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $way;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $postal_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mobile_phone_number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone_number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contact_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contact_firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contact_mobile_phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contact_phone_number;

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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->birth_date;
    }

    public function setBirthDate(string $birth_date): self
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getSsNb(): ?string
    {
        return $this->ss_nb;
    }

    public function setSsNb(string $ss_nb): self
    {
        $this->ss_nb = $ss_nb;

        return $this;
    }

    public function getWayNb(): ?int
    {
        return $this->way_nb;
    }

    public function setWayNb(int $way_nb): self
    {
        $this->way_nb = $way_nb;

        return $this;
    }

    public function getWay(): ?string
    {
        return $this->way;
    }

    public function setWay(string $way): self
    {
        $this->way = $way;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postal_code;
    }

    public function setPostalCode(int $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getMobilePhoneNumber(): ?string
    {
        return $this->mobile_phone_number;
    }

    public function setMobilePhoneNumber(?string $mobile_phone_number): self
    {
        $this->mobile_phone_number = $mobile_phone_number;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(?string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contact_name;
    }

    public function setContactName(?string $contact_name): self
    {
        $this->contact_name = $contact_name;

        return $this;
    }

    public function getContactFirstname(): ?string
    {
        return $this->contact_firstname;
    }

    public function setContactFirstname(?string $contact_firstname): self
    {
        $this->contact_firstname = $contact_firstname;

        return $this;
    }

    public function getContactMobilePhone(): ?string
    {
        return $this->contact_mobile_phone;
    }

    public function setContactMobilePhone(?string $contact_mobile_phone): self
    {
        $this->contact_mobile_phone = $contact_mobile_phone;

        return $this;
    }

    public function getContactPhoneNumber(): ?string
    {
        return $this->contact_phone_number;
    }

    public function setContactPhoneNumber(?string $contact_phone_number): self
    {
        $this->contact_phone_number = $contact_phone_number;

        return $this;
    }
}
