<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Blogger\BlogBundle\Entity\User;

class UsersController extends Controller
{
    public function getUserAction($param)
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('BloggerBlogBundle:User')->findAll();

        return array('users' => $users);
    }

//    public function postUserAction(Request $request)
//    {
//
//    }

//    /**
//     * @return array
//     * @View()
//     */
//    public function getUsersAction()
//    {
//        $users = $this->getDoctrine()->getRepository('BloggerBlogBundle:User')->findAll();
//        return array('users' => $users);
//    }

//    /**
//     * @param User $user
//     * @return array
//     * @View()
//     * @ParamConverter("User", class="BloggerBlogBundle:User")
//     */
//    public function getUserAction(User $user)
//    {
//        return array('user' => $user);
//    }
}