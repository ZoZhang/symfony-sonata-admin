<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itemlist
 *
 * @ORM\Table(name="itemlist")
 * @ORM\Entity
 */
class Itemlist
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
     * @ORM\Column(name="infraid", type="integer", nullable=false)
     */
    private $infraid;

    /**
     * @var int
     *
     * @ORM\Column(name="itemid", type="integer", nullable=false)
     */
    private $itemid;


}
