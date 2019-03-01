<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Automatedtasklist
 *
 * @ORM\Table(name="automatedtasklist")
 * @ORM\Entity
 */
class Automatedtasklist
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
     * @ORM\Column(name="taskid", type="integer", nullable=false)
     */
    private $taskid;

    /**
     * @var int
     *
     * @ORM\Column(name="ecenterid", type="integer", nullable=false)
     */
    private $ecenterid;


}
