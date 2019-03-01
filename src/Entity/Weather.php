<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weather
 *
 * @ORM\Table(name="weather")
 * @ORM\Entity
 */
class Weather
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="effect", type="text", length=65535, nullable=false)
     */
    private $effect;


}
