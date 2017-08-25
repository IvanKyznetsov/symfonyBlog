<?php

namespace Blogger\BlogBundle\DependencyInjection;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Acl\Exception\Exception;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Blogger\BlogBundle\Entity\User;

class ApiKey
{
    public function apikeys(Request $request, $em)
    {
        $apikey = $request->get("apikey");

        if (!$apikey) {
            throw new AccessDeniedException("ACCESS DENIED");
        } else {
            $user = $em->getRepository('BloggerBlogBundle:User')
                ->findOneByConfirmation_token($apikey);
            if (!$user) {
                throw new AccessDeniedException("ACCESS DENIED");
            } else {
                return $apikey;
            }
        }
    }
}