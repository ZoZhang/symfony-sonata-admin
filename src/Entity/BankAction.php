<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankAction
 *
 * @ORM\Table(name="bank_action")
 * @ORM\Entity
 */
class BankAction
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;


}
