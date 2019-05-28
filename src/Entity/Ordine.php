<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrdineRepository")
 */
class Ordine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $riferimento;

    /**
     * @ORM\Column(type="date")
     */
    private $dataOrdine;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dataConsegnaPrevista;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dataBlocco;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $giorniBlocco;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $iva;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ivaAgevolata;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cantiereIndirizzo;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $cantiereCap;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cantierePaese;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $cantiereProvincia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totale;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totaleNetto;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totaleIncassato;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $statoRilievo;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $statoRilevato;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $statoOrdinato;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $statoConfermato;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $statoArrivoMerce;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $statoPosato;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $totaleRighe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $allarmeConsegna;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $allarmeDati;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $nettoProvvigione;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $pagatoProvvigione;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ricaricoLordo;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $sconto;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $provvigione;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ricaricoNetto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cliente", inversedBy="ordini")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cliente;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Referente", inversedBy="ordiniReferente")
     */
    private $referente;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RigaOrdine", mappedBy="ordine", orphanRemoval=true)
     */
    private $righeOrdine;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Referente", inversedBy="ordiniTecnico")
     */
    private $tecnico;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pagamento", mappedBy="ordine", orphanRemoval=true)
     */
    private $pagamenti;

    public function __construct()
    {
        $this->righeOrdine = new ArrayCollection();
        $this->pagamenti = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

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

    public function getDataOrdine(): ?\DateTimeInterface
    {
        return $this->dataOrdine;
    }

    public function setDataOrdine(\DateTimeInterface $dataOrdine): self
    {
        $this->dataOrdine = $dataOrdine;

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

    public function getDataBlocco(): ?\DateTimeInterface
    {
        return $this->dataBlocco;
    }

    public function setDataBlocco(?\DateTimeInterface $dataBlocco): self
    {
        $this->dataBlocco = $dataBlocco;

        return $this;
    }

    public function getGiorniBlocco(): ?int
    {
        return $this->giorniBlocco;
    }

    public function setGiorniBlocco(?int $giorniBlocco): self
    {
        $this->giorniBlocco = $giorniBlocco;

        return $this;
    }

    public function getIva(): ?float
    {
        return $this->iva;
    }

    public function setIva(?float $iva): self
    {
        $this->iva = $iva;

        return $this;
    }

    public function getIvaAgevolata(): ?bool
    {
        return $this->ivaAgevolata;
    }

    public function setIvaAgevolata(?bool $ivaAgevolata): self
    {
        $this->ivaAgevolata = $ivaAgevolata;

        return $this;
    }

    public function getCantiereIndirizzo(): ?string
    {
        return $this->cantiereIndirizzo;
    }

    public function setCantiereIndirizzo(?string $cantiereIndirizzo): self
    {
        $this->cantiereIndirizzo = $cantiereIndirizzo;

        return $this;
    }

    public function getCantiereCap(): ?string
    {
        return $this->cantiereCap;
    }

    public function setCantiereCap(?string $cantiereCap): self
    {
        $this->cantiereCap = $cantiereCap;

        return $this;
    }

    public function getCantierePaese(): ?string
    {
        return $this->cantierePaese;
    }

    public function setCantierePaese(?string $cantierePaese): self
    {
        $this->cantierePaese = $cantierePaese;

        return $this;
    }

    public function getCantiereProvincia(): ?string
    {
        return $this->cantiereProvincia;
    }

    public function setCantiereProvincia(?string $cantiereProvincia): self
    {
        $this->cantiereProvincia = $cantiereProvincia;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getTotale(): ?float
    {
        return $this->totale;
    }

    public function setTotale(?float $totale): self
    {
        $this->totale = $totale;

        return $this;
    }

    public function getTotaleNetto(): ?float
    {
        return $this->totaleNetto;
    }

    public function setTotaleNetto(?float $totaleNetto): self
    {
        $this->totaleNetto = $totaleNetto;

        return $this;
    }

    public function getTotaleIncassato(): ?float
    {
        return $this->totaleIncassato;
    }

    public function setTotaleIncassato(?float $totaleIncassato): self
    {
        $this->totaleIncassato = $totaleIncassato;

        return $this;
    }

    public function getStatoRilievo(): ?int
    {
        return $this->statoRilievo;
    }

    public function setStatoRilievo(?int $statoRilievo): self
    {
        $this->statoRilievo = $statoRilievo;

        return $this;
    }

    public function getStatoRilevato(): ?int
    {
        return $this->statoRilevato;
    }

    public function setStatoRilevato(?int $statoRilevato): self
    {
        $this->statoRilevato = $statoRilevato;

        return $this;
    }

    public function getStatoOrdinato(): ?int
    {
        return $this->statoOrdinato;
    }

    public function setStatoOrdinato(?int $statoOrdinato): self
    {
        $this->statoOrdinato = $statoOrdinato;

        return $this;
    }

    public function getStatoConfermato(): ?int
    {
        return $this->statoConfermato;
    }

    public function setStatoConfermato(?int $statoConfermato): self
    {
        $this->statoConfermato = $statoConfermato;

        return $this;
    }

    public function getStatoArrivoMerce(): ?int
    {
        return $this->statoArrivoMerce;
    }

    public function setStatoArrivoMerce(?int $statoArrivoMerce): self
    {
        $this->statoArrivoMerce = $statoArrivoMerce;

        return $this;
    }

    public function getStatoPosato(): ?int
    {
        return $this->statoPosato;
    }

    public function setStatoPosato(?int $statoPosato): self
    {
        $this->statoPosato = $statoPosato;

        return $this;
    }

    public function getTotaleRighe(): ?int
    {
        return $this->totaleRighe;
    }

    public function setTotaleRighe(?int $totaleRighe): self
    {
        $this->totaleRighe = $totaleRighe;

        return $this;
    }

    public function getAllarmeConsegna(): ?int
    {
        return $this->allarmeConsegna;
    }

    public function setAllarmeConsegna(?int $allarmeConsegna): self
    {
        $this->allarmeConsegna = $allarmeConsegna;

        return $this;
    }

    public function getAllarmeDati(): ?int
    {
        return $this->allarmeDati;
    }

    public function setAllarmeDati(?int $allarmeDati): self
    {
        $this->allarmeDati = $allarmeDati;

        return $this;
    }

    public function getNettoProvvigione(): ?float
    {
        return $this->nettoProvvigione;
    }

    public function setNettoProvvigione(?float $nettoProvvigione): self
    {
        $this->nettoProvvigione = $nettoProvvigione;

        return $this;
    }

    public function getPagatoProvvigione(): ?bool
    {
        return $this->pagatoProvvigione;
    }

    public function setPagatoProvvigione(?bool $pagatoProvvigione): self
    {
        $this->pagatoProvvigione = $pagatoProvvigione;

        return $this;
    }

    public function getRicaricoLordo(): ?float
    {
        return $this->ricaricoLordo;
    }

    public function setRicaricoLordo(?float $ricaricoLordo): self
    {
        $this->ricaricoLordo = $ricaricoLordo;

        return $this;
    }

    public function getSconto(): ?float
    {
        return $this->sconto;
    }

    public function setSconto(?float $sconto): self
    {
        $this->sconto = $sconto;

        return $this;
    }

    public function getProvvigione(): ?float
    {
        return $this->provvigione;
    }

    public function setProvvigione(?float $provvigione): self
    {
        $this->provvigione = $provvigione;

        return $this;
    }

    public function getRicaricoNetto(): ?float
    {
        return $this->ricaricoNetto;
    }

    public function setRicaricoNetto(?float $ricaricoNetto): self
    {
        $this->ricaricoNetto = $ricaricoNetto;

        return $this;
    }

    public function getCliente(): ?Cliente
    {
        return $this->cliente;
    }

    public function setCliente(?Cliente $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getReferente(): ?Referente
    {
        return $this->referente;
    }

    public function setReferente(?Referente $referente): self
    {
        $this->referente = $referente;

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
            $righeOrdine->setOrdine($this);
        }

        return $this;
    }

    public function removeRigheOrdine(RigaOrdine $righeOrdine): self
    {
        if ($this->righeOrdine->contains($righeOrdine)) {
            $this->righeOrdine->removeElement($righeOrdine);
            // set the owning side to null (unless already changed)
            if ($righeOrdine->getOrdine() === $this) {
                $righeOrdine->setOrdine(null);
            }
        }

        return $this;
    }

    public function getTecnico(): ?Referente
    {
        return $this->tecnico;
    }

    public function setTecnico(?Referente $tecnico): self
    {
        $this->tecnico = $tecnico;

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
            $pagamenti->setOrdine($this);
        }

        return $this;
    }

    public function removePagamenti(Pagamento $pagamenti): self
    {
        if ($this->pagamenti->contains($pagamenti)) {
            $this->pagamenti->removeElement($pagamenti);
            // set the owning side to null (unless already changed)
            if ($pagamenti->getOrdine() === $this) {
                $pagamenti->setOrdine(null);
            }
        }

        return $this;
    }
}
