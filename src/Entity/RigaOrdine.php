<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RigaOrdineRepository")
 */
class RigaOrdine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ordine", inversedBy="righeOrdine")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ordine;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Prodotto", inversedBy="righeOrdine")
     */
    private $prodotto;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantita;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $okDatiCommerciali;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $okRilievo;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataRilievo;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataOrdineFornitore;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $riferimento;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataConfermaFornitore;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataConsegnaPrevista;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataArrivoMerce;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataPosa;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $costoNetto;

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

    public function getProdotto(): ?Prodotto
    {
        return $this->prodotto;
    }

    public function setProdotto(?Prodotto $prodotto): self
    {
        $this->prodotto = $prodotto;

        return $this;
    }

    public function getQuantita(): ?int
    {
        return $this->quantita;
    }

    public function setQuantita(?int $quantita): self
    {
        $this->quantita = $quantita;

        return $this;
    }

    public function getOkDatiCommerciali(): ?bool
    {
        return $this->okDatiCommerciali;
    }

    public function setOkDatiCommerciali(?bool $okDatiCommerciali): self
    {
        $this->okDatiCommerciali = $okDatiCommerciali;

        return $this;
    }

    public function getOkRilievo(): ?bool
    {
        return $this->okRilievo;
    }

    public function setOkRilievo(?bool $okRilievo): self
    {
        $this->okRilievo = $okRilievo;

        return $this;
    }

    public function getDataRilievo(): ?\DateTimeInterface
    {
        return $this->dataRilievo;
    }

    public function setDataRilievo(?\DateTimeInterface $dataRilievo): self
    {
        $this->dataRilievo = $dataRilievo;

        return $this;
    }

    public function getDataOrdineFornitore(): ?\DateTimeInterface
    {
        return $this->dataOrdineFornitore;
    }

    public function setDataOrdineFornitore(?\DateTimeInterface $dataOrdineFornitore): self
    {
        $this->dataOrdineFornitore = $dataOrdineFornitore;

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

    public function getDataConfermaFornitore(): ?\DateTimeInterface
    {
        return $this->dataConfermaFornitore;
    }

    public function setDataConfermaFornitore(?\DateTimeInterface $dataConfermaFornitore): self
    {
        $this->dataConfermaFornitore = $dataConfermaFornitore;

        return $this;
    }

    public function getDataConsegnaPrevista(): ?\DateTimeInterface
    {
        return $this->dataConsegnaPrevista;
    }

    public function setDataConsegnaPrevista(?\DateTimeInterface $dataConsegnaPrevista): self
    {
        $this->dataConsegnaPrevista = $dataConsegnaPrevista;

        return $this;
    }

    public function getDataArrivoMerce(): ?\DateTimeInterface
    {
        return $this->dataArrivoMerce;
    }

    public function setDataArrivoMerce(?\DateTimeInterface $dataArrivoMerce): self
    {
        $this->dataArrivoMerce = $dataArrivoMerce;

        return $this;
    }

    public function getDataPosa(): ?\DateTimeInterface
    {
        return $this->dataPosa;
    }

    public function setDataPosa(?\DateTimeInterface $dataPosa): self
    {
        $this->dataPosa = $dataPosa;

        return $this;
    }

    public function getCostoNetto(): ?float
    {
        return $this->costoNetto;
    }

    public function setCostoNetto(?float $costoNetto): self
    {
        $this->costoNetto = $costoNetto;

        return $this;
    }
}
