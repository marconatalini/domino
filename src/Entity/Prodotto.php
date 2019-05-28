<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProdottoRepository")
 */
class Prodotto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $descrizione;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $giorniConsegna;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $giorniPosa;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $confermaRichiesta;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Fornitore", inversedBy="prodotti")
     */
    private $fornitore;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RigaOrdine", mappedBy="prodotto")
     */
    private $righeOrdine;

    public function __construct()
    {
        $this->righeOrdine = new ArrayCollection();
    }

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

    public function getGiorniConsegna(): ?int
    {
        return $this->giorniConsegna;
    }

    public function setGiorniConsegna(?int $giorniConsegna): self
    {
        $this->giorniConsegna = $giorniConsegna;

        return $this;
    }

    public function getGiorniPosa(): ?int
    {
        return $this->giorniPosa;
    }

    public function setGiorniPosa(?int $giorniPosa): self
    {
        $this->giorniPosa = $giorniPosa;

        return $this;
    }

    public function getConfermaRichiesta(): ?bool
    {
        return $this->confermaRichiesta;
    }

    public function setConfermaRichiesta(?bool $confermaRichiesta): self
    {
        $this->confermaRichiesta = $confermaRichiesta;

        return $this;
    }

    public function getFornitore(): ?Fornitore
    {
        return $this->fornitore;
    }

    public function setFornitore(?Fornitore $fornitore): self
    {
        $this->fornitore = $fornitore;

        return $this;
    }

    /**
     * @return Collection|RigaOrdine[]
     */
    public function getRigheOrdine(): Collection
    {
        return $this->righeOrdine;
    }

    public function addRigheOrdine(RigaOrdine $righeOrdine): self
    {
        if (!$this->righeOrdine->contains($righeOrdine)) {
            $this->righeOrdine[] = $righeOrdine;
            $righeOrdine->setProdotto($this);
        }

        return $this;
    }

    public function removeRigheOrdine(RigaOrdine $righeOrdine): self
    {
        if ($this->righeOrdine->contains($righeOrdine)) {
            $this->righeOrdine->removeElement($righeOrdine);
            // set the owning side to null (unless already changed)
            if ($righeOrdine->getProdotto() === $this) {
                $righeOrdine->setProdotto(null);
            }
        }

        return $this;
    }
}
