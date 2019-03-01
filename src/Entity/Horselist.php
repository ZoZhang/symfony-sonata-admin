<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horselist
 *
 * @ORM\Table(name="horselist")
 * @ORM\Entity
 */
class Horselist
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
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="horseid", type="integer", nullable=false)
     */
    private $horseid;


}
