<?php

namespace Blogger\BlogBundle\Security\User;

use Blogger\BlogBundle\Entity\User;
//use Blogger\BlogBundle\Security\User\WebserviceUser;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityManagerInterface;

class WebserviceUserProvider implements UserProviderInterface
{
    protected $em;

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function loadUserByUsername($username)
    {
        $user = $this->em->getRepository('BloggerBlogBundle:User')
            ->findOneByApi_key($username);

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
//        if (!$user instanceof WebserviceUser) {
//            throw new UnsupportedUserException(
//                sprintf('Instances of "%s" are not supported.', get_class($user))
//            );
//        }

        if (!$user instanceof User){
            throw new HttpNotFoundException("User not found");
        }

        return $this->loadUserByUsername($user->getApiKey());
    }

    public function supportsClass($class)
    {
        return User::class === $class;
    }
}