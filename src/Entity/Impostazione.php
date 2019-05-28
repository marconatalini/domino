<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImpostazioneRepository")
 */
class Impostazione
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
    private $descrizione;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $valore;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescrizione(): ?string
    {
        return $this->descrizione;
    }

    public function setDescrizione(string $descrizione): self
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    public function getValore(): ?string
    {
        return $this->valore;
    }

    public function setValore(string $valore): self
    {
        $this->valore = $valore;

        return $this;
    }
}
