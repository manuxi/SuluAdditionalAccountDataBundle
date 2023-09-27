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


}