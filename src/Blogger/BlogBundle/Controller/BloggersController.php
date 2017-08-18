<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class BloggersController extends Controller
{
    /**
     * @param $param
     * @return array
     */
    public function getBloggerAction($param)
    {
        $em = $this->getDoctrine()->getManager();

        $bloggers = $em->getRepository('BloggerBlogBundle:Blog')->find('103');

        return array('bloggers' => $bloggers);
    }
}