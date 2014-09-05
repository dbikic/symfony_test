<?php

namespace Simple\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Simple\ProfileBundle\Entity\Osoba;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
		
        return $this->render('SimpleProfileBundle:Default:index.html.twig', array());
    }
	
	public function createAction()
	{
		$osoba = new Osoba();
		$osoba->setName('Dino');
		$osoba->setSurname('Bikic');
		$osoba->setEmail('asd@asd.asd');
		$osoba->setPhone('789456');
		$osoba->setAddress('asd 12, AD2');
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($osoba);
		$em->flush();
		
		return new Response('Created osoba sa id '.$osoba->getId());
	}
	
	public function showAction(){
		$osoba = $this->getDoctrine()
			->getRepository('SimpleProfileBundle:Osoba')
			->findAll();
	}
}
