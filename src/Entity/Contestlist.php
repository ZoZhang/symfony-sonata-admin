<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contestlist
 *
 * @ORM\Table(name="contestlist")
 * @ORM\Entity
 */
class Contestlist
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
     * @ORM\Column(name="contestid", type="integer", nullable=false)
     */
    private $contestid;

    /**
     * @var int
     *
     * @ORM\Column(name="horseclubid", type="integer", nullable=false)
     */
    private $horseclubid;


}
