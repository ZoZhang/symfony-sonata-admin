<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecenterinfrastructurelist
 *
 * @ORM\Table(name="ecenterinfrastructurelist")
 * @ORM\Entity
 */
class Ecenterinfrastructurelist
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
     * @ORM\Column(name="ecenterid", type="integer", nullable=false)
     */
    private $ecenterid;

    /**
     * @var int
     *
     * @ORM\Column(name="infrastructureid", type="integer", nullable=false)
     */
    private $infrastructureid;


}
