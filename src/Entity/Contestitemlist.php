<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contestitemlist
 *
 * @ORM\Table(name="contestitemlist")
 * @ORM\Entity
 */
class Contestitemlist
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
     * @ORM\Column(name="itemid", type="integer", nullable=false)
     */
    private $itemid;

    /**
     * @var int
     *
     * @ORM\Column(name="contestid", type="integer", nullable=false)
     */
    private $contestid;


}
