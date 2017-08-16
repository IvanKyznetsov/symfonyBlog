<?php
// src/AppBundle/Controller/CRUDController.php

namespace Blogger\BlogBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Blogger\BlogBundle\Entity\Blog;
use Blogger\BlogBundle\Form\BlogType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;

class CRUDController extends Controller
{
    public function preCreate(Request $request, $object)
    {
        $request  = $this->getRequest();
        //$test = $request->request->get('s5994188ce532a');
        //$request = $this->get('request');
        //$postData = $request->request->get('s5994118adefc2');
        //$request = $this->getRequest('title');
        var_dump($request);
//        $blog = new Blog();
//        //$form = $this->createForm(BlogType::class, $blog);
//
//        if ($request->isMethod($request::METHOD_POST)) {
//            //$form->handleRequest($request);
//
//            $image = $blog->getImage();
//            $imageName = md5(uniqid()).'.'.$image->guessExtension();
//
//            $image->move(
//                $this->getParameter('image_directory'),
//                $imageName
//            );
//
//            $blog->setImage($imageName);
//
//            $em = $this->getDoctrine()
//                ->getManager();
//            $em->persist($blog);
//            $em->flush();
//
//            $resimg = $this->container->get('resize_image')->resize($imageName);
//
//            return $this->redirect($this->generateUrl('BloggerBlogBundle_admin_add'));
//
//
////            if ($form->isValid()) {
////                $em = $this->getDoctrine()
////                    ->getManager();
////                $em->persist($blog);
////                $em->flush();
////
////                $resimg = $this->container->get('resize_image')->resize($imageName);
////
////                return $this->redirect($this->generateUrl('BloggerBlogBundle_admin_add'));
////            }
//        }
//
//        return $this->render('BloggerBlogBundle:Admin:add.html.twig', array(
//            'form' => $form->createView()
//        ));
    }
}