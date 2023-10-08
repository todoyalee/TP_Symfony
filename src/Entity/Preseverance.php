<?php

namespace App\Entity;

use App\Repository\PreseveranceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreseveranceRepository::class)]
class Preseverance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hardwork = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $willpower = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $patience = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHardwork(): ?string
    {
        return $this->hardwork;
    }

    public function setHardwork(?string $hardwork): static
    {
        $this->hardwork = $hardwork;

        return $this;
    }

    public function getWillpower(): ?string
    {
        return $this->willpower;
    }

    public function setWillpower(?string $willpower): static
    {
        $this->willpower = $willpower;

        return $this;
    }

    public function getPatience(): ?string
    {
        return $this->patience;
    }

    public function setPatience(?string $patience): static
    {
        $this->patience = $patience;

        return $this;
    }
}
