<?php

namespace Simple\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SimpleProfileBundle:Default:index.html.twig', array('name' => $name));
    }
}
