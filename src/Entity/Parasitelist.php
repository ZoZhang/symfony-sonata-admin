<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parasitelist
 *
 * @ORM\Table(name="parasitelist")
 * @ORM\Entity
 */
class Parasitelist
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
     * @ORM\Column(name="horseid", type="integer", nullable=false)
     */
    private $horseid;

    /**
     * @var int
     *
     * @ORM\Column(name="parasiteid", type="integer", nullable=false)
     */
    private $parasiteid;


}
