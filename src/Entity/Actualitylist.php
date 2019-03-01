<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualitylist
 *
 * @ORM\Table(name="actualitylist")
 * @ORM\Entity
 */
class Actualitylist
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
     * @ORM\Column(name="actualityid", type="integer", nullable=false)
     */
    private $actualityid;

    /**
     * @var int
     *
     * @ORM\Column(name="newsid", type="integer", nullable=false)
     */
    private $newsid;


}
