<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagamentoRepository")
 */
class Pagamento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ordine", inversedBy="pagamenti")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ordine;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPagamento", inversedBy="pagamenti")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tipoPagamento;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataPagamento;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $importoNetto;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $importoIvato;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $okPagamento;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $fattura;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdine(): ?Ordine
    {
        return $this->ordine;
    }

    public function setOrdine(?Ordine $ordine): self
    {
        $this->ordine = $ordine;

        return $this;
    }

    public function getTipoPagamento(): ?TipoPagamento
    {
        return $this->tipoPagamento;
    }

    public function setTipoPagamento(?TipoPagamento $tipoPagamento): self
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    public function getDataPagamento(): ?\DateTimeInterface
    {
        return $this->dataPagamento;
    }

    public function setDataPagamento(?\DateTimeInterface $dataPagamento): self
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    public function getImportoNetto(): ?float
    {
        return $this->importoNetto;
    }

    public function setImportoNetto(?float $importoNetto): self
    {
        $this->importoNetto = $importoNetto;

        return $this;
    }

    public function getImportoIvato(): ?float
    {
        return $this->importoIvato;
    }

    public function setImportoIvato(?float $importoIvato): self
    {
        $this->importoIvato = $importoIvato;

        return $this;
    }

    public function getOkPagamento(): ?bool
    {
        return $this->okPagamento;
    }

    public function setOkPagamento(?bool $okPagamento): self
    {
        $this->okPagamento = $okPagamento;

        return $this;
    }

    public function getFattura(): ?string
    {
        return $this->fattura;
    }

    public function setFattura(?string $fattura): self
    {
        $this->fattura = $fattura;

        return $this;
    }
}
