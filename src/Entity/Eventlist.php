<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventlist
 *
 * @ORM\Table(name="eventlist")
 * @ORM\Entity
 */
class Eventlist
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
     * @ORM\Column(name="eventid", type="integer", nullable=false)
     */
    private $eventid;

    /**
     * @var int
     *
     * @ORM\Column(name="newsid", type="integer", nullable=false)
     */
    private $newsid;


}
