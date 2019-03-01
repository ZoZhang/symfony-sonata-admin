<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Injurylist
 *
 * @ORM\Table(name="injurylist")
 * @ORM\Entity
 */
class Injurylist
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
     * @ORM\Column(name="injuryid", type="integer", nullable=false)
     */
    private $injuryid;


}
