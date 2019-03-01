<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horseclubinfrastructurelist
 *
 * @ORM\Table(name="horseclubinfrastructurelist")
 * @ORM\Entity
 */
class Horseclubinfrastructurelist
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
     * @ORM\Column(name="horseclubid", type="integer", nullable=false)
     */
    private $horseclubid;

    /**
     * @var int
     *
     * @ORM\Column(name="infrastructureid", type="integer", nullable=false)
     */
    private $infrastructureid;


}
