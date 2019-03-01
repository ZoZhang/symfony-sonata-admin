<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicknesslist
 *
 * @ORM\Table(name="sicknesslist")
 * @ORM\Entity
 */
class Sicknesslist
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
     * @ORM\Column(name="sicknessid", type="integer", nullable=false)
     */
    private $sicknessid;


}
