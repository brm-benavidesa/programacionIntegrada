<?php

namespace inicio\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('iniciologinBundle:Default:index.html.twig', array('name' => $name));
    }
    public function logInAction()
    {
        return $this->render('iniciologinBundle:Default:logIn.html.twig');
    }
}
