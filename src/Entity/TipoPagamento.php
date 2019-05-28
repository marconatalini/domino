<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoPagamentoRepository")
 */
class TipoPagamento
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
    private $descrizione;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pagamento", mappedBy="tipoPagamento")
     */
    private $pagamenti;

    public function __construct()
    {
        $this->pagamenti = new ArrayCollection();
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

    /**
     * @return Collection|Pagamento[]
     */
    public function getPagamenti(): Collection
    {
        return $this->pagamenti;
    }

    public function addPagamenti(Pagamento $pagamenti): self
    {
        if (!$this->pagamenti->contains($pagamenti)) {
            $this->pagamenti[] = $pagamenti;
            $pagamenti->setTipoPagamento($this);
        }

        return $this;
    }

    public function removePagamenti(Pagamento $pagamenti): self
    {
        if ($this->pagamenti->contains($pagamenti)) {
            $this->pagamenti->removeElement($pagamenti);
            // set the owning side to null (unless already changed)
            if ($pagamenti->getTipoPagamento() === $this) {
                $pagamenti->setTipoPagamento(null);
            }
        }

        return $this;
    }
}
