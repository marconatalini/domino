<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $cognome;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $indirizzo;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $cap;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $paese;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telefono1;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telefono2;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $cellulare;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $riferimento;

    /**
     * @ORM\Column(type="string", length=11, nullable=true)
     */
    private $piva;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $cf;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ordine", mappedBy="cliente")
     */
    private $ordini;

    public function __construct()
    {
        $this->ordini = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCognome(): ?string
    {
        return $this->cognome;
    }

    public function setCognome(?string $cognome): self
    {
        $this->cognome = $cognome;

        return $this;
    }

    public function getIndirizzo(): ?string
    {
        return $this->indirizzo;
    }

    public function setIndirizzo(?string $indirizzo): self
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    public function getCap(): ?string
    {
        return $this->cap;
    }

    public function setCap(?string $cap): self
    {
        $this->cap = $cap;

        return $this;
    }

    public function getPaese(): ?string
    {
        return $this->paese;
    }

    public function setPaese(?string $paese): self
    {
        $this->paese = $paese;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getTelefono1(): ?string
    {
        return $this->telefono1;
    }

    public function setTelefono1(?string $telefono1): self
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    public function getTelefono2(): ?string
    {
        return $this->telefono2;
    }

    public function setTelefono2(?string $telefono2): self
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    public function getCellulare(): ?string
    {
        return $this->cellulare;
    }

    public function setCellulare(?string $cellulare): self
    {
        $this->cellulare = $cellulare;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRiferimento(): ?string
    {
        return $this->riferimento;
    }

    public function setRiferimento(?string $riferimento): self
    {
        $this->riferimento = $riferimento;

        return $this;
    }

    public function getPiva(): ?string
    {
        return $this->piva;
    }

    public function setPiva(?string $piva): self
    {
        $this->piva = $piva;

        return $this;
    }

    public function getCf(): ?string
    {
        return $this->cf;
    }

    public function setCf(?string $cf): self
    {
        $this->cf = $cf;

        return $this;
    }

    /**
     * @return Collection|Ordine[]
     */
    public function getOrdini(): Collection
    {
        return $this->ordini;
    }

    public function addOrdini(Ordine $ordini): self
    {
        if (!$this->ordini->contains($ordini)) {
            $this->ordini[] = $ordini;
            $ordini->setCliente($this);
        }

        return $this;
    }

    public function removeOrdini(Ordine $ordini): self
    {
        if ($this->ordini->contains($ordini)) {
            $this->ordini->removeElement($ordini);
            // set the owning side to null (unless already changed)
            if ($ordini->getCliente() === $this) {
                $ordini->setCliente(null);
            }
        }

        return $this;
    }
}
