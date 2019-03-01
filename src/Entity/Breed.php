<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Breed
 *
 * @ORM\Table(name="breed")
 * @ORM\Entity
 */
class Breed
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
     * @ORM\Column(name="breed_name", type="string", length=32, nullable=false)
     */
    private $breedName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;


}
