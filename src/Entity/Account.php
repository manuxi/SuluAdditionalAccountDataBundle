<?php

namespace Manuxi\SuluAdditionalAccountDataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sulu\Bundle\ContactBundle\Entity\Account as SuluAccount;

/**
 * The following annotations are required for replacing the table of the extended entity:
 *
 * @ORM\Entity
 * @ORM\Table(name="co_accounts")
 */
class Account extends SuluAccount
{
    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $regCourt;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $regNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $monAm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $monPm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $tueAm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $tuePm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $wedAm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $wedPm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $thurAm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $thurPm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $friAm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $friPm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $satAm;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     */
    private ?string $satPm;


    public function setRegCourt(?string $regCourt): void
    {
        $this->regCourt = $regCourt;
    }

    public function getRegCourt(): ?string
    {
        return $this->regCourt;
    }

    public function setRegNumber(?string $regNumber): void
    {
        $this->regNumber = $regNumber;
    }

    public function getRegNumber(): ?string
    {
        return $this->regNumber;
    }

    /**
     * @return string|null
     */
    public function getFriAm(): ?string
    {
        return $this->friAm;
    }

    /**
     * @param string|null $friAm
     */
    public function setFriAm(?string $friAm): void
    {
        $this->friAm = $friAm;
    }

    /**
     * @return string|null
     */
    public function getFriPm(): ?string
    {
        return $this->friPm;
    }

    /**
     * @param string|null $friPm
     */
    public function setFriPm(?string $friPm): void
    {
        $this->friPm = $friPm;
    }

    /**
     * @return string|null
     */
    public function getMonAm(): ?string
    {
        return $this->monAm;
    }

    /**
     * @param string|null $monAm
     */
    public function setMonAm(?string $monAm): void
    {
        $this->monAm = $monAm;
    }

    /**
     * @return string|null
     */
    public function getMonPm(): ?string
    {
        return $this->monPm;
    }

    /**
     * @param string|null $monPm
     */
    public function setMonPm(?string $monPm): void
    {
        $this->monPm = $monPm;
    }

    /**
     * @return string|null
     */
    public function getTueAm(): ?string
    {
        return $this->tueAm;
    }

    /**
     * @param string|null $tueAm
     */
    public function setTueAm(?string $tueAm): void
    {
        $this->tueAm = $tueAm;
    }

    /**
     * @return string|null
     */
    public function getTuePm(): ?string
    {
        return $this->tuePm;
    }

    /**
     * @param string|null $tuePm
     */
    public function setTuePm(?string $tuePm): void
    {
        $this->tuePm = $tuePm;
    }

    /**
     * @return string|null
     */
    public function getWedAm(): ?string
    {
        return $this->wedAm;
    }

    /**
     * @param string|null $wedAm
     */
    public function setWedAm(?string $wedAm): void
    {
        $this->wedAm = $wedAm;
    }

    /**
     * @return string|null
     */
    public function getWedPm(): ?string
    {
        return $this->wedPm;
    }

    /**
     * @param string|null $wedPm
     */
    public function setWedPm(?string $wedPm): void
    {
        $this->wedPm = $wedPm;
    }

    /**
     * @return string|null
     */
    public function getThurAm(): ?string
    {
        return $this->thurAm;
    }

    /**
     * @param string|null $thurAm
     */
    public function setThurAm(?string $thurAm): void
    {
        $this->thurAm = $thurAm;
    }

    /**
     * @return string|null
     */
    public function getThurPm(): ?string
    {
        return $this->thurPm;
    }

    /**
     * @param string|null $thurPm
     */
    public function setThurPm(?string $thurPm): void
    {
        $this->thurPm = $thurPm;
    }

    /**
     * @return string|null
     */
    public function getSatAm(): ?string
    {
        return $this->satAm;
    }

    /**
     * @param string|null $satAm
     */
    public function setSatAm(?string $satAm): void
    {
        $this->satAm = $satAm;
    }

    /**
     * @return string|null
     */
    public function getSatPm(): ?string
    {
        return $this->satPm;
    }

    /**
     * @param string|null $satPm
     */
    public function setSatPm(?string $satPm): void
    {
        $this->satPm = $satPm;
    }



}