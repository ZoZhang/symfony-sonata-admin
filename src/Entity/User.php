<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="surname", type="string", length=32, nullable=false)
     */
    private $surname;

    /**
     * @var bool
     *
     * @ORM\Column(name="sex", type="boolean", nullable=false)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=64, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=32, nullable=false)
     * @ORM\JoinColumn(name="id", referencedColumnName="userid")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true, options={"default"="NULL"})
     */
    private $birthdate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cell_number", type="string", nullable=false)
     */
    private $cellNumber = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $address = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="avatar_link", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $avatarLink = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="biography", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $biography = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=64, nullable=true, options={"default"="NULL"})
     */
    private $website = '';

    /**
     * @var int
     *
     * @ORM\Column(name="bank_id", type="integer", nullable=false)
     */
    private $bankId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=15, nullable=false)
     */
    private $ipAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register_date", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $registerDate = 'current_timestamp()';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_online", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $lastOnline = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setname(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return null|bool
     */
    public function isSex(): ?bool
    {
        return $this->sex;
    }

    /**
     * @param bool $sex
     */
    public function setSex(bool $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return null|string
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return null|string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return null|string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthdate(): ?\DateTime
    {
        return $this->birthdate;
    }

    /**
     * @param \DateTime|null $birthdate
     */
    public function setBirthdate(?\DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return string
     */
    public function getCellNumber(): string
    {
        return $this->cellNumber;
    }

    /**
     * @param string $cellNumber
     */
    public function setCellNumber(string $cellNumber): void
    {
        $this->cellNumber = $cellNumber;
    }

    /**
     * @return null|string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param null|string $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return null|string
     */
    public function getAvatarLink(): ?string
    {
        return $this->avatarLink;
    }

    /**
     * @param null|string $avatarLink
     */
    public function setAvatarLink(?string $avatarLink): void
    {
        $this->avatarLink = $avatarLink;
    }

    /**
     * @return null|string
     */
    public function getBiography(): ?string
    {
        return $this->biography;
    }

    /**
     * @param null|string $biography
     */
    public function setBiography(?string $biography): void
    {
        $this->biography = $biography;
    }

    /**
     * @return null|string
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param null|string $website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    /**
     * @return int
     */
    public function getBankId(): int
    {
        return $this->bankId;
    }

    /**
     * @param int $bankId
     */
    public function setBankId(int $bankId): void
    {
        $this->bankId = $bankId;
    }

    /**
     * @return null|string
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return \DateTime|string
     */
    public function getRegisterDate(): ?\DateTime
    {
        return $this->registerDate;
    }

    /**
     * @param \DateTime|string $registerDate
     */
    public function setRegisterDate(\DateTime $registerDate): void
    {
        $this->registerDate = $registerDate;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastOnline(): ?\DateTime
    {
        return $this->lastOnline;
    }

    /**
     * @param \DateTime|null $lastOnline
     */
    public function setLastOnline(?\DateTime $lastOnline): void
    {
        $this->lastOnline = $lastOnline;
    }

    public function getUser(): self
    {
        return $this;
    }

    public function __toString()
    {
        return (string) $this->username;
    }
}
