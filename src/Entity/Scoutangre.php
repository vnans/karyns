<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScoutangreRepository")
 */
class Scoutangre
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
    private $nomprenoms;

    /**
     * @ORM\Column(type="date")
     */
    private $datenaiss;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieunaiss;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situationmatri;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bpostale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $paroisse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baptise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $baptisepar;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datebapteme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieubapteme;

    /**
     * @ORM\Column(type="boolean")
     */
    private $confrime;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $confirmerpar;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateconfirm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lieuconfirm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fonctparoisse;

    /**
     * @ORM\Column(type="date")
     */
    private $datescout;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuscout;

    /**
     * @ORM\Column(type="date")
     */
    private $datepromesse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieupromesse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonctscoutactu;

    /**
     * @ORM\Column(type="date")
     */
    private $datenomi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stage1;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $stage1date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stage1lieu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stage2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $stage2date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stage2lieu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stage3;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $stage3date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stage3lieu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stageinter1;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $stageinter1date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stageinter1lieu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stageinter2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $stageinter2date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stageinter2lieu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomprenoms(): ?string
    {
        return $this->nomprenoms;
    }

    public function setNomprenoms(string $nomprenoms): self
    {
        $this->nomprenoms = $nomprenoms;

        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    public function getLieunaiss(): ?string
    {
        return $this->lieunaiss;
    }

    public function setLieunaiss(string $lieunaiss): self
    {
        $this->lieunaiss = $lieunaiss;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getSituationmatri(): ?string
    {
        return $this->situationmatri;
    }

    public function setSituationmatri(string $situationmatri): self
    {
        $this->situationmatri = $situationmatri;

        return $this;
    }

    public function getSexe(): ?bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): self
    {
        $this->sexe = $sexe;

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

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getBpostale(): ?string
    {
        return $this->bpostale;
    }

    public function setBpostale(?string $bpostale): self
    {
        $this->bpostale = $bpostale;

        return $this;
    }

    public function getParoisse(): ?string
    {
        return $this->paroisse;
    }

    public function setParoisse(string $paroisse): self
    {
        $this->paroisse = $paroisse;

        return $this;
    }

    public function getBaptise(): ?bool
    {
        return $this->baptise;
    }

    public function setBaptise(bool $baptise): self
    {
        $this->baptise = $baptise;

        return $this;
    }

    public function getBaptisepar(): ?string
    {
        return $this->baptisepar;
    }

    public function setBaptisepar(?string $baptisepar): self
    {
        $this->baptisepar = $baptisepar;

        return $this;
    }

    public function getDatebapteme(): ?\DateTimeInterface
    {
        return $this->datebapteme;
    }

    public function setDatebapteme(?\DateTimeInterface $datebapteme): self
    {
        $this->datebapteme = $datebapteme;

        return $this;
    }

    public function getLieubapteme(): ?string
    {
        return $this->lieubapteme;
    }

    public function setLieubapteme(?string $lieubapteme): self
    {
        $this->lieubapteme = $lieubapteme;

        return $this;
    }

    public function getConfrime(): ?bool
    {
        return $this->confrime;
    }

    public function setConfrime(bool $confrime): self
    {
        $this->confrime = $confrime;

        return $this;
    }

    public function getConfirmerpar(): ?string
    {
        return $this->confirmerpar;
    }

    public function setConfirmerpar(?string $confirmerpar): self
    {
        $this->confirmerpar = $confirmerpar;

        return $this;
    }

    public function getDateconfirm(): ?\DateTimeInterface
    {
        return $this->dateconfirm;
    }

    public function setDateconfirm(?\DateTimeInterface $dateconfirm): self
    {
        $this->dateconfirm = $dateconfirm;

        return $this;
    }

    public function getLieuconfirm(): ?string
    {
        return $this->lieuconfirm;
    }

    public function setLieuconfirm(?string $lieuconfirm): self
    {
        $this->lieuconfirm = $lieuconfirm;

        return $this;
    }

    public function getFonctparoisse(): ?string
    {
        return $this->fonctparoisse;
    }

    public function setFonctparoisse(?string $fonctparoisse): self
    {
        $this->fonctparoisse = $fonctparoisse;

        return $this;
    }

    public function getDatescout(): ?\DateTimeInterface
    {
        return $this->datescout;
    }

    public function setDatescout(\DateTimeInterface $datescout): self
    {
        $this->datescout = $datescout;

        return $this;
    }

    public function getLieuscout(): ?string
    {
        return $this->lieuscout;
    }

    public function setLieuscout(string $lieuscout): self
    {
        $this->lieuscout = $lieuscout;

        return $this;
    }

    public function getDatepromesse(): ?\DateTimeInterface
    {
        return $this->datepromesse;
    }

    public function setDatepromesse(\DateTimeInterface $datepromesse): self
    {
        $this->datepromesse = $datepromesse;

        return $this;
    }

    public function getLieupromesse(): ?string
    {
        return $this->lieupromesse;
    }

    public function setLieupromesse(string $lieupromesse): self
    {
        $this->lieupromesse = $lieupromesse;

        return $this;
    }

    public function getFonctscoutactu(): ?string
    {
        return $this->fonctscoutactu;
    }

    public function setFonctscoutactu(string $fonctscoutactu): self
    {
        $this->fonctscoutactu = $fonctscoutactu;

        return $this;
    }

    public function getDatenomi(): ?\DateTimeInterface
    {
        return $this->datenomi;
    }

    public function setDatenomi(\DateTimeInterface $datenomi): self
    {
        $this->datenomi = $datenomi;

        return $this;
    }

    public function getStage1(): ?string
    {
        return $this->stage1;
    }

    public function setStage1(?string $stage1): self
    {
        $this->stage1 = $stage1;

        return $this;
    }

    public function getStage1date(): ?\DateTimeInterface
    {
        return $this->stage1date;
    }

    public function setStage1date(?\DateTimeInterface $stage1date): self
    {
        $this->stage1date = $stage1date;

        return $this;
    }

    public function getStage1lieu(): ?string
    {
        return $this->stage1lieu;
    }

    public function setStage1lieu(?string $stage1lieu): self
    {
        $this->stage1lieu = $stage1lieu;

        return $this;
    }

    public function getStage2(): ?string
    {
        return $this->stage2;
    }

    public function setStage2(?string $stage2): self
    {
        $this->stage2 = $stage2;

        return $this;
    }

    public function getStage2date(): ?\DateTimeInterface
    {
        return $this->stage2date;
    }

    public function setStage2date(?\DateTimeInterface $stage2date): self
    {
        $this->stage2date = $stage2date;

        return $this;
    }

    public function getStage2lieu(): ?string
    {
        return $this->stage2lieu;
    }

    public function setStage2lieu(?string $stage2lieu): self
    {
        $this->stage2lieu = $stage2lieu;

        return $this;
    }

    public function getStage3(): ?string
    {
        return $this->stage3;
    }

    public function setStage3(?string $stage3): self
    {
        $this->stage3 = $stage3;

        return $this;
    }

    public function getStage3date(): ?\DateTimeInterface
    {
        return $this->stage3date;
    }

    public function setStage3date(?\DateTimeInterface $stage3date): self
    {
        $this->stage3date = $stage3date;

        return $this;
    }

    public function getStage3lieu(): ?string
    {
        return $this->stage3lieu;
    }

    public function setStage3lieu(?string $stage3lieu): self
    {
        $this->stage3lieu = $stage3lieu;

        return $this;
    }

    public function getStageinter1(): ?string
    {
        return $this->stageinter1;
    }

    public function setStageinter1(?string $stageinter1): self
    {
        $this->stageinter1 = $stageinter1;

        return $this;
    }

    public function getStageinter1date(): ?\DateTimeInterface
    {
        return $this->stageinter1date;
    }

    public function setStageinter1date(?\DateTimeInterface $stageinter1date): self
    {
        $this->stageinter1date = $stageinter1date;

        return $this;
    }

    public function getStageinter1lieu(): ?string
    {
        return $this->stageinter1lieu;
    }

    public function setStageinter1lieu(?string $stageinter1lieu): self
    {
        $this->stageinter1lieu = $stageinter1lieu;

        return $this;
    }

    public function getStageinter2(): ?string
    {
        return $this->stageinter2;
    }

    public function setStageinter2(?string $stageinter2): self
    {
        $this->stageinter2 = $stageinter2;

        return $this;
    }

    public function getStageinter2date(): ?\DateTimeInterface
    {
        return $this->stageinter2date;
    }

    public function setStageinter2date(?\DateTimeInterface $stageinter2date): self
    {
        $this->stageinter2date = $stageinter2date;

        return $this;
    }

    public function getStageinter2lieu(): ?string
    {
        return $this->stageinter2lieu;
    }

    public function setStageinter2lieu(?string $stageinter2lieu): self
    {
        $this->stageinter2lieu = $stageinter2lieu;

        return $this;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }
}
