<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Entity\Blog;
use Blogger\BlogBundle\Form\BlogType;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Route;
use Blogger\BlogBundle\Entity\User;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Filesystem\Filesystem;

class BlogController extends FOSRestController
{
    public function showAction($id, $slug, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('BloggerBlogBundle:Comment')
            ->getCommentsForBlog($blog->getId());

        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
        ));
    }

    /**
     * @ApiDoc(
     *  resource=true
     * )
     */
    public function getBlogsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $blogs = $em->getRepository('BloggerBlogBundle:Blog')->findAll();

        //$apikey = $this->container->get('api_key')->apikeys($request, $em);

        return array('blogs' => $blogs);

//        $apikey = $request->get("apikey");
//
//        if (!$apikey) {
//            throw new AccessDeniedException("ACCESS DENIED");
//        } else {
//            $user = $em->getRepository('BloggerBlogBundle:User')
//                ->findOneByConfirmation_token($apikey);
//            if (!$user) {
//                throw new AccessDeniedException("ACCESS DENIED");
//            } else {
//                return array('blogs' => $blogs);
//            }
//        }

//        return $this->render('BloggerBlogBundle:Page:json.html.twig', array(
//            'blogs'      => $blogs
//        ));
    }

    /**
     * @ApiDoc(
     *  resource=true
     * )
     */
    public function getBlogAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        return array('blog' => $blog);
    }

    /**
     * @ApiDoc(
     *  resource=true
     * )
     */
    public function deleteBlgAction($id)
    {
//        $em = $this->getDoctrine()->getManager();
//        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);
//        $em->remove($blog);
//        $em->flush();

        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository(Blog::class)->find($id);
        $imgdel = $blog->getImage();
        $fs = new Filesystem();
        $fs->remove($this->getParameter('image_directory').$imgdel);
        $em->remove($blog);
        $em->flush();

        return new View("Blog Delete Successfully", Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *  resource=true,
     *  input="Blogger\BlogBundle\Form\BlogType"
     * )
     */
    public function postAction(Request $request)
    {
        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()
                    ->getManager();
                $em->persist($blog);
                $em->flush();

                return new View("Blog Added Successfully", Response::HTTP_OK);
            }
        }
        return $this->render('BloggerBlogBundle:Admin:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}