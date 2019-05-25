<?php

namespace PaypalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        return $this->render('PaypalBundle:Default:index.html.twig');
        return $this->render('@Paypal/Default/index.html.twig');
    }
}
