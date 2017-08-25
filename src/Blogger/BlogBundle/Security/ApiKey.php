<?php

namespace Blogger\BlogBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Acl\Exception\Exception;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Blogger\BlogBundle\Entity\User;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class ApiKey implements UserProviderInterface
{
    public function apikeys(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $apikey = $request->get("apikey");

//        if (!$apikey) {
//            throw new AccessDeniedException("ACCESS DENIED");
//        } else {
//            return $apikey;
//        }

        if (!$apikey) {
            throw new AccessDeniedException("ACCESS DENIED");
        } else {
            $user = $em->getRepository('BloggerBlogBundle:User')
                ->findOneByConfirmation_token($apikey);
            if (!$user) {
                throw new AccessDeniedException("ACCESS DENIED");
            } else {
                $username = $user->username;
                return $username;
            }
        }
    }

    public function loadUserByUsername($username)
    {
        return new User(
            $username,
            null,
            array('ROLE_API')
        );
    }

    public function refreshUser(UserInterface $user)
    {
        throw new UnsupportedUserException();
    }

    public function supportsClass($class)
    {
        return User::class === $class;
    }
}