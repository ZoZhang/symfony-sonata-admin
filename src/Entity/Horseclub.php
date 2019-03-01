<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horseclub
 *
 * @ORM\Table(name="horseclub")
 * @ORM\Entity
 */
class Horseclub
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
     * @ORM\Column(name="capacity", type="integer", nullable=false)
     */
    private $capacity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="userid", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $userid = 'NULL';


}
