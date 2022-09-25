<?php

namespace App\Entity;

use App\Repository\HistoriquesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoriquesRepository::class)]
class Historiques
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: '0', nullable: true)]
    private ?string $Temperature = null;

    #[ORM\Column(nullable: true)]
    private ?float $Vitesse = null;

    #[ORM\Column(nullable: true)]
    private ?float $Influance = null;

    #[ORM\Column(nullable: true)]
    private ?float $Duree_de_fonctioment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTemperature(): ?string
    {
        return $this->Temperature;
    }

    public function setTemperature(?string $Temperature): self
    {
        $this->Temperature = $Temperature;

        return $this;
    }

    public function getVitesse(): ?float
    {
        return $this->Vitesse;
    }

    public function setVitesse(?float $Vitesse): self
    {
        $this->Vitesse = $Vitesse;

        return $this;
    }

    public function getInfluance(): ?float
    {
        return $this->Influance;
    }

    public function setInfluance(?float $Influance): self
    {
        $this->Influance = $Influance;

        return $this;
    }

    public function getDureeDeFonctioment(): ?float
    {
        return $this->Duree_de_fonctioment;
    }

    public function setDureeDeFonctioment(?float $Duree_de_fonctioment): self
    {
        $this->Duree_de_fonctioment = $Duree_de_fonctioment;

        return $this;
    }
}
