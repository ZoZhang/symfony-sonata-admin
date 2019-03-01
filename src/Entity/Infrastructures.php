<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infrastructures
 *
 * @ORM\Table(name="infrastructures")
 * @ORM\Entity
 */
class Infrastructures
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
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="family", type="string", length=32, nullable=false)
     */
    private $family;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="ressources_consumption", type="integer", nullable=false)
     */
    private $ressourcesConsumption;

    /**
     * @var int
     *
     * @ORM\Column(name="item_capacity", type="integer", nullable=false)
     */
    private $itemCapacity;

    /**
     * @var int
     *
     * @ORM\Column(name="horse_capacity", type="integer", nullable=false)
     */
    private $horseCapacity;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getFamily(): ?string
    {
        return $this->family;
    }

    /**
     * @param string $family
     */
    public function setFamily(string $family): void
    {
        $this->family = $family;
    }

    /**
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getRessourcesConsumption(): ?int
    {
        return $this->ressourcesConsumption;
    }

    /**
     * @param int $ressourcesConsumption
     */
    public function setRessourcesConsumption(int $ressourcesConsumption): void
    {
        $this->ressourcesConsumption = $ressourcesConsumption;
    }

    /**
     * @return int
     */
    public function getItemCapacity(): ?int
    {
        return $this->itemCapacity;
    }

    /**
     * @param int $itemCapacity
     */
    public function setItemCapacity(int $itemCapacity): void
    {
        $this->itemCapacity = $itemCapacity;
    }

    /**
     * @return int
     */
    public function getHorseCapacity(): ?int
    {
        return $this->horseCapacity;
    }

    /**
     * @param int $horseCapacity
     */
    public function setHorseCapacity(int $horseCapacity): void
    {
        $this->horseCapacity = $horseCapacity;
    }

}
