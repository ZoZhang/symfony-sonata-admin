<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Automatedtasks
 *
 * @ORM\Table(name="automatedtasks")
 * @ORM\Entity
 */
class Automatedtasks
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
     * @ORM\Column(name="ecenter_id", type="integer", nullable=false)
     */
    private $ecenterId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delay", type="time", nullable=false)
     */
    private $delay;


}
