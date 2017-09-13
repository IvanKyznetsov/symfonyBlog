<?php
// src/Blogger/BlogBundle/Controller/AdminController.php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Entity\Blog;
use Blogger\BlogBundle\Form\BlogType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class AdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
            ->getLatestBlogs();

        return $this->render('BloggerBlogBundle:Page:admin.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function addAction()
    {
        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);

        return $this->render('BloggerBlogBundle:Admin:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function createAction(Request $request)
    {
        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

//            $image = $blog->getImage();
//            $imageName = md5(uniqid()).'.'.$image->guessExtension();
//
//            $image->move(
//                $this->getParameter('image_directory'),
//                $imageName
//            );
//
//            $blog->setImage($imageName);


            if ($form->isValid()) {
                $em = $this->getDoctrine()
                    ->getManager();
                $em->persist($blog);
                $em->flush();

                //$resimg = $this->container->get('resize_image')->resize($imageName);

                return $this->redirect($this->generateUrl('BloggerBlogBundle_admin_add'));
            }
        }

        return $this->render('BloggerBlogBundle:Admin:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteAction(Request $request, $blogId)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository(Blog::class)->find($blogId);
        $imgdel = $blog->getImage();
        $fs = new Filesystem();
        $fs->remove($this->getParameter('image_directory').$imgdel);
        $em->remove($blog);
        $em->flush();

        return $this->redirect($request->headers->get('referer'));
    }

    public function changeAction($blogId)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blog_id = $em->getRepository('BloggerBlogBundle:Blog')->find($blogId);

        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);

        return $this->render('BloggerBlogBundle:Admin:update.html.twig', array(
            'form' => $form->createView(),
            'blog' => $blog_id
        ));
    }

    public function updateAction(Request $request, $blogId)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository(Blog::class)->find($blogId);
        $blogs = $em->getRepository('BloggerBlogBundle:Blog')
            ->getLatestBlogs();
        $form = $this->createForm(BlogType::class, $blog);

        //$img = $blog->getImage();

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

//            if ($blog->getImage()) {
//                $image = $blog->getImage();
//                $imageName = md5(uniqid()).'.'.$image->guessExtension();
//
//                $image->move(
//                    $this->getParameter('image_directory'),
//                    $imageName
//                );
//                $blog->setImage($imageName);
//
//                $fs = new Filesystem();
//                $fs->remove($this->getParameter('image_directory').$img);
//            } else {
//                $blog->setImage($img);
//            }

            if ($form->isValid()) {
                $em->persist($blog);
                $em->flush();

                return $this->render('BloggerBlogBundle:Page:admin.html.twig', array(
                    'blogs' => $blogs
                ));
            }
        }

        return $this->render('BloggerBlogBundle:Page:admin.html.twig', array(
            'blogs' => $blogs
        ));
    }

    public function testAction() {

//        $resimg = $this->container->get('just_test');
        $resimg = $this->container->get('test');
        
        $test = 5;

        return $resimg->vardump();
    }
}
