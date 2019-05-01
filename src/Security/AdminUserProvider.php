<?php

namespace App\Security;

use App\Entity\AdminUser;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

final class AdminUserProvider implements UserProviderInterface
{
    /**
    * @var EntityManagerInterface
    */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadUserByUsername($username): AdminUser
    {
        $user = $this->findOneUserBy(['user' => $username]);

        if (!$user) {
            throw new UsernameNotFoundException(
            sprintf(
            'User "%s" does not exist.',
             $username
            )
            );
        }

        return $user;
    }

    /**
     * @param array $options
     * @return AdminUser|null
     */
    private function findOneUserBy(array $options): ?AdminUser
    {
        return $this->entityManager
            ->getRepository(AdminUser::class)
            ->findOneBy($options);
    }

    public function refreshUser(UserInterface $user): AdminUser
    {
        assert($user instanceof AdminUser);

        if (null === $reloadedUser = $this->findOneUserBy(['user' => $user->getUsername()])) {
        throw new UsernameNotFoundException(sprintf(
        'User with ID "%s" could not be reloaded.',
            $user->getUsername()
        ));
        }

        return $reloadedUser;
    }

    public function supportsClass($class): bool
    {
        return $class === AdminUser::class;
    }
}