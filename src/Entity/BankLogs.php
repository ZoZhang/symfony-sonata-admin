<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankLogs
 *
 * @ORM\Table(name="bank_logs")
 * @ORM\Entity
 */
class BankLogs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="bank_id", type="integer", nullable=false)
     */
    private $bankId;

    /**
     * @var int
     *
     * @ORM\Column(name="bank_action_id", type="integer", nullable=false)
     */
    private $bankActionId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @return int
     */
    public function getBankId(): int
    {
        return $this->bankId;
    }

    /**
     * @param int $bankId
     */
    public function setBankId(int $bankId): void
    {
        $this->bankId = $bankId;
    }

    /**
     * @return int
     */
    public function getBankActionId(): int
    {
        return $this->bankActionId;
    }

    /**
     * @param int $bankActionId
     */
    public function setBankActionId(int $bankActionId): void
    {
        $this->bankActionId = $bankActionId;
    }

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }


}
