<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Comment;
use Blogger\BlogBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    public function newAction($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment = new Comment();
        $comment->setBlog($blog);
        $form   = $this->createForm(CommentType::class, $comment);

        return $this->render('BloggerBlogBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
        ));
    }

    public function createAction(Request $request, $blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $user = $this->getUser();

        $comment  = new Comment();
        $comment->setUser($user);
        $comment->setBlog($blog);
        $form    = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('BloggerBlogBundle_blog_show', array(
                'id'    => $comment->getBlog()->getId(),
                'slug'  => $comment->getBlog()->getSlug())) .
                '#comment-' . $comment->getId()
            );
        }

        return $this->render('BloggerBlogBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }

    protected function getBlog($blog_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $blog;
    }

    public function deleteAction(Request $request, $commentId)
    {
        $em = $this->getDoctrine()->getManager();
        $comment = $em->getRepository(Comment::class)->find($commentId);
        $em->remove($comment);
        $em->flush();

        return $this->redirect($request->headers->get('referer'));
    }

    public function getCommentAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $blogs = $em->getRepository('BloggerBlogBundle:Blog')->findAll();

        return array('blogs' => $blogs);
    }

    public function ajaxAction(Request $request, $message)
    {

        if ($request->isXMLHttpRequest()) {
            return new JsonResponse(array('data' => 'this is a json response'));
        }

        return new Response('This is not ajax!', 400);
//
//        var_dump($message);
//        exit;

//        //$blog = $this->getBlog($blog_id);
//
//        $user = $this->getUser();
//
//        $comment  = new Comment();
//        $test=$_POST['comment'];
//        $comment->setUser($user);
//        //$comment->setBlog($blog);
//        $comment->setComment($test);
//        $form    = $this->createForm(CommentType::class, $comment);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()
//                ->getManager();
//            $em->persist($comment);
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('BloggerBlogBundle_blog_show', array(
//                    'id'    => $comment->getBlog()->getId(),
//                    'slug'  => $comment->getBlog()->getSlug())) .
//                '#comment-' . $comment->getId()
//            );
////            return new JsonResponse(array('message' => 'Success!'), 200);
//        }
//
//        return $this->render('BloggerBlogBundle:Comment:create.html.twig', array(
//            'comment' => $comment,
//            'form'    => $form->createView()
//        ));
//        return new JsonResponse(array('message' => 'Success!'), 200);
///
///
//            return array(
//                "result" => $this->getRequest()->get("data"),
//            );
    }
}