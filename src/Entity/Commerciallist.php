<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commerciallist
 *
 * @ORM\Table(name="commerciallist")
 * @ORM\Entity
 */
class Commerciallist
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
     * @ORM\Column(name="commercialid", type="integer", nullable=false)
     */
    private $commercialid;

    /**
     * @var int
     *
     * @ORM\Column(name="newsid", type="integer", nullable=false)
     */
    private $newsid;


}
