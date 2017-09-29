<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Blogger\BlogBundle\Entity\User;
use Blogger\BlogBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function getUserAction($param)
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('BloggerBlogBundle:User')->findAll();

        return array('users' => $users);
    }

    public function showAction() {
        $users = new User();
        $form = $this->createForm(UserType::class, $users);
        $user = $this->getUser();

        return $this->render('@FOSUser/Profile/show.html.twig', array(
            'user' => $user,
            'form' => $form->createView()
        ));
    }

    public function imageAction(Request $request, $user_id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($user_id);
        $form = $this->createForm(UserType::class, $user);

        $img = $user->getImage();

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

//            $image = $user->getImage();
//            $imageName = md5(uniqid()).'.'.$image->guessExtension();
//
//            $image->move(
//                $this->getParameter('image_profile'),
//                $imageName
//            );
//
//            $user->setImage($imageName);

            if ($user->getImage()) {
                $image = $user->getImage();
                $imageName = md5(uniqid()).'.'.$image->guessExtension();

                $image->move(
                    $this->getParameter('image_profile'),
                    $imageName
                );
                $user->setImage($imageName);

                $fs = new Filesystem();
                $fs->remove($this->getParameter('image_profile').$img);
            } else {
                $user->setImage($img);
            }

            if ($form->isValid()) {
                $em = $this->getDoctrine()
                    ->getManager();
                $em->persist($user);
                $em->flush();

                return $this->redirect($this->generateUrl('BloggerBlogBundle_profile_show'));
            }
        }

    }

    public function cropAction($userId) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($userId);
        return $this->render('BloggerBlogBundle:User:crop.html.twig', array(
            'user' => $user
        ));
    }

    public function releaseAction() {
        $filenew = time().rand(100,999).'.jpg';
        if (isset($_POST['crop'])) {
            $crop = $this->getParameter('crop_image').$_POST['crop'];
            $img = $this->getParameter('crop_image').$_POST['img'];
            $x1 = $_POST['x1'];
            $y1 = $_POST['y1'];
            $x2 = $_POST['x2'];
            $y2 = $_POST['y2'];
            $this->cropingAction($img, $crop.$filenew, array($x1, $y1, $x2, $y2));
            $user = $this->getUser();
            $user->setImage($filenew);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $redirect = 'http://symfonyblog/app_dev.php/profiles';
            echo $redirect;
            exit;
        }
    }

    public function cropingAction($file_input, $file_output, $crop = 'square',$percent = false) {
        list($w_i, $h_i, $type) = getimagesize($file_input);
        if (!$w_i || !$h_i) {
            echo 'first';
            return;
        }
        $types = array('','gif','jpeg','png');
        $ext = $types[$type];
        if ($ext) {
            $func = 'imagecreatefrom'.$ext;
            $img = $func($file_input);
            $fs = new Filesystem();
            $fs->remove($file_input);
        } else {
            echo 'second';
            return;
        }
        if ($crop == 'square') {
            $min = $w_i;
            if ($w_i > $h_i) $min = $h_i;
            $w_o = $h_o = $min;
        } else {
            list($x_o, $y_o, $w_o, $h_o) = $crop;
            if ($percent) {
                $w_o *= $w_i / 100;
                $h_o *= $h_i / 100;
                $x_o *= $w_i / 100;
                $y_o *= $h_i / 100;
            }
            if ($w_o < 0) $w_o += $w_i;
            $w_o -= $x_o;
            if ($h_o < 0) $h_o += $h_i;
            $h_o -= $y_o;
        }
        $img_o = imagecreatetruecolor($w_o, $h_o);
        imagecopy($img_o, $img, 0, 0, $x_o, $y_o, $w_o, $h_o);
        if ($type == 2) {
            imagejpeg($img_o,$file_output,100);

        } else {
            $func = 'image'.$ext;
            $func($img_o,$file_output);
        }
        imagedestroy($img_o);
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