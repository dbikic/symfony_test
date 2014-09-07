<?php

namespace Simple\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SimpleTaskBundle:Default:index.html.twig', array('name' => $name));
    }
}
