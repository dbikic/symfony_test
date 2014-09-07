<?php

namespace Simple\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Simple\ProfileBundle\Entity\Osoba;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {		
        return $this->render('SimpleProfileBundle:Default:index.html.twig', array());
    }	
}
