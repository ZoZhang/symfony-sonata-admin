<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horse
 *
 * @ORM\Table(name="horse")
 * @ORM\Entity
 */
class Horse
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
     * @var int
     *
     * @ORM\Column(name="breedid", type="integer", nullable=false)
     */
    private $breedid;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="experience", type="integer", nullable=false)
     */
    private $experience;

    /**
     * @var int
     *
     * @ORM\Column(name="general_state", type="integer", nullable=false)
     */
    private $generalState;

    /**
     * @var int
     *
     * @ORM\Column(name="toughness", type="integer", nullable=false)
     */
    private $toughness;

    /**
     * @var int
     *
     * @ORM\Column(name="stamina", type="integer", nullable=false)
     */
    private $stamina;

    /**
     * @var int
     *
     * @ORM\Column(name="jump_range", type="integer", nullable=false)
     */
    private $jumpRange;

    /**
     * @var int
     *
     * @ORM\Column(name="speed", type="integer", nullable=false)
     */
    private $speed;

    /**
     * @var int
     *
     * @ORM\Column(name="sociability", type="integer", nullable=false)
     */
    private $sociability;

    /**
     * @var int
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=false)
     */
    private $intelligence;

    /**
     * @var int
     *
     * @ORM\Column(name="temper_id", type="integer", nullable=false)
     */
    private $temperId;

    /**
     * @var int
     *
     * @ORM\Column(name="health", type="integer", nullable=false)
     */
    private $health;

    /**
     * @var int
     *
     * @ORM\Column(name="moodid", type="integer", nullable=false)
     */
    private $moodid;

    /**
     * @var int
     *
     * @ORM\Column(name="stress", type="integer", nullable=false)
     */
    private $stress;

    /**
     * @var int
     *
     * @ORM\Column(name="tiredness", type="integer", nullable=false)
     */
    private $tiredness;

    /**
     * @var int
     *
     * @ORM\Column(name="hunger", type="integer", nullable=false)
     */
    private $hunger;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getBreedid(): ?int
    {
        return $this->breedid;
    }

    /**
     * @param int $breedid
     */
    public function setBreedid(int $breedid): void
    {
        $this->breedid = $breedid;
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
     * @return int
     */
    public function getExperience(): ?int
    {
        return $this->experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @return int
     */
    public function getGeneralState(): ?int
    {
        return $this->generalState;
    }

    /**
     * @param int $generalState
     */
    public function setGeneralState(int $generalState): void
    {
        $this->generalState = $generalState;
    }

    /**
     * @return int
     */
    public function getToughness(): ?int
    {
        return $this->toughness;
    }

    /**
     * @param int $toughness
     */
    public function setToughness(int $toughness): void
    {
        $this->toughness = $toughness;
    }

    /**
     * @return int
     */
    public function getStamina(): ?int
    {
        return $this->stamina;
    }

    /**
     * @param int $stamina
     */
    public function setStamina(int $stamina): void
    {
        $this->stamina = $stamina;
    }

    /**
     * @return int
     */
    public function getJumpRange(): ?int
    {
        return $this->jumpRange;
    }

    /**
     * @param int $jumpRange
     */
    public function setJumpRange(int $jumpRange): void
    {
        $this->jumpRange = $jumpRange;
    }

    /**
     * @return int
     */
    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSociability(): ?int
    {
        return $this->sociability;
    }

    /**
     * @param int $sociability
     */
    public function setSociability(int $sociability): void
    {
        $this->sociability = $sociability;
    }

    /**
     * @return int
     */
    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    /**
     * @param int $intelligence
     */
    public function setIntelligence(int $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @return int
     */
    public function getTemperId(): ?int
    {
        return $this->temperId;
    }

    /**
     * @param int $temperId
     */
    public function setTemperId(int $temperId): void
    {
        $this->temperId = $temperId;
    }

    /**
     * @return int
     */
    public function getHealth(): ?int
    {
        return $this->health;
    }

    /**
     * @param int $health
     */
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    /**
     * @return int
     */
    public function getMoodid(): ?int
    {
        return $this->moodid;
    }

    /**
     * @param int $moodid
     */
    public function setMoodid(int $moodid): void
    {
        $this->moodid = $moodid;
    }

    /**
     * @return int
     */
    public function getStress(): ?int
    {
        return $this->stress;
    }

    /**
     * @param int $stress
     */
    public function setStress(int $stress): void
    {
        $this->stress = $stress;
    }

    /**
     * @return int
     */
    public function getTiredness(): ?int
    {
        return $this->tiredness;
    }

    /**
     * @param int $tiredness
     */
    public function setTiredness(int $tiredness): void
    {
        $this->tiredness = $tiredness;
    }

    /**
     * @return int
     */
    public function getHunger(): ?int
    {
        return $this->hunger;
    }

    /**
     * @param int $hunger
     */
    public function setHunger(int $hunger): void
    {
        $this->hunger = $hunger;
    }

    /**
     * @return int
     */
    public function getDirtiness(): ?int
    {
        return $this->dirtiness;
    }

    /**
     * @param int $dirtiness
     */
    public function setDirtiness(int $dirtiness): void
    {
        $this->dirtiness = $dirtiness;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="dirtiness", type="integer", nullable=false)
     */
    private $dirtiness;


}
