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
     * @var \App\Entity\Bank
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Bank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_id", referencedColumnName="id")
     * })
     */
    private $bank;

    /**
     * @var \App\Entity\BankAction
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\BankAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_action_id", referencedColumnName="id")
     * })
     */
    private $bankAction;

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

    public function getBank(): ?Bank
    {
        return $this->bank;
    }

    public function setBank(?int $bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getBankAction(): ?BankAction
    {
        return $this->bankAction;
    }

    public function setBankAction(?int $bankActionId): self
    {
        $this->bankAction = $bankActionId;

        return $this;
    }

}
