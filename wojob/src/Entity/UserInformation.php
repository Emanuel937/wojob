<?php

namespace App\Entity;

use App\Repository\UserInformationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserInformationRepository::class)
 */
class UserInformation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255 , nullable=True)
     */
    private $pronom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passwordEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=True)
     */
    private $nom;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActive;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPronom(): ?string
    {
        return $this->pronom;
    }

    public function setPronom(string $pronom): self
    {
        $this->pronom = $pronom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPasswordEmail(): ?string
    {
        return $this->passwordEmail;
    }

    public function setPasswordEmail(string $passwordEmail): self
    {
        $this->passwordEmail = $passwordEmail;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

}
