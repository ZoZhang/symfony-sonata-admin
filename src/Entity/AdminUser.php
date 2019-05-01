<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="mysql.user")
 * @ORM\Entity
 */
class AdminUser implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=80, unique=true)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=41)
     */
    private $password;

    public function __construct()
    {
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getUsername()
    {
        return $this->user;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array('ROLE_SONATA_ADMIN');
    }

    public function hasRole()
    {
        return 'ROLE_SONATA_ADMIN';
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->user,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->user,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, array('allowed_classes' => false));
    }
}
