<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;
use Stripe\Stripe;


class StripeController extends Controller
{
   public function indexAction()
   {
       \Stripe\Stripe::setApiKey("sk_test_ts0PWLlX0wvEdgSvqAUQdheT");

       $plans = \Stripe\Plan::all(array("limit" => 3));

       return $this->render('BloggerBlogBundle:Page:stripe.html.twig', array(
           'plans' => $plans,
       ));
   }

   public function stripeAction(Request $request)
   {
       \Stripe\Stripe::setApiKey("sk_test_ts0PWLlX0wvEdgSvqAUQdheT");

       $token = $_POST['stripeToken'];

       $charge = \Stripe\Charge::create(array(
           "amount" => 1000,
           "currency" => "usd",
           "description" => "Example charge",
           "source" => $token,
       ));

       return $this->redirect($request->headers->get('referer'));
   }

   public function planAction(Request $request)
   {
       \Stripe\Stripe::setApiKey("sk_test_ts0PWLlX0wvEdgSvqAUQdheT");

       $plan = \Stripe\Plan::create(array(
           "name" => "Second Plan",
           "id" => "second-plan",
           "interval" => "year",
           "currency" => "usd",
           "amount" => 0,
       ));

       return $this->redirect($request->headers->get('referer'));
   }

   public function userAction(Request $request)
   {
       $email = $this->getUser()->getEmail();
       $id = $this->getUser()->getId();

       \Stripe\Stripe::setApiKey("sk_test_ts0PWLlX0wvEdgSvqAUQdheT");

       $customer = \Stripe\Customer::create(array(
           "email" => $email,
       ));

       $em = $this->getDoctrine()->getManager();
       $user = $em->getRepository('BloggerBlogBundle:User')->find($id);
       $user->setStripe($customer->id);

       $em->persist($user);
       $em->flush();

       return $this->redirect($request->headers->get('referer'));
   }

   public function subscriptionAction(Request $request)
   {
       $stripe = $this->getUser()->getStripe();

       \Stripe\Stripe::setApiKey("sk_test_ts0PWLlX0wvEdgSvqAUQdheT");

           $subscription = \Stripe\Subscription::create(array(
           "customer" => $stripe,
           "items" => array(
               array(
                   "plan" => "basic-monthly",
               ),
           ),
       ));

       return $this->redirect($request->headers->get('referer'));
   }

   public function hookAction()
   {
       \Stripe\Stripe::setApiKey("sk_test_ts0PWLlX0wvEdgSvqAUQdheT");

       $user = \Stripe\Customer::retrieve("cus_BGpQSNrlHb2Efg");

       var_dump($user);
       exit;
   }

   public function subscriptionIdAction() {

   }
}