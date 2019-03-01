<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity
 */
class News
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $date = 'current_timestamp()';

    /**
     * @var int
     *
     * @ORM\Column(name="weather_id", type="integer", nullable=false)
     */
    private $weatherId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getWeatherId(): int
    {
        return $this->weatherId;
    }

    /**
     * @param int $weatherId
     */
    public function setWeatherId(int $weatherId): void
    {
        $this->weatherId = $weatherId;
    }

}
