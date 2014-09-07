<?php

namespace Simple\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Simple\ProfileBundle\Entity\Osoba;
use Simple\ProfileBundle\Form\OsobaType;


class OsobaController extends Controller
{
    public function indexAction()
    {
	
		$osobe = $this->getDoctrine()
			->getRepository('SimpleProfileBundle:Osoba')
			->findAll();
		
		return $this->render(
            'SimpleProfileBundle:Osoba:index.html.twig',
            array(
                'osobe' => $osobe,
            )
        );
    }
		
	public function newAction(){
		
		$osoba = new Osoba();
        $form = $this->createForm(new OsobaType(), $osoba);

        return $this->render(
            'SimpleProfileBundle:Osoba:new.html.twig',
            array(
                'osoba' => $osoba,
                'form' => $form->createView(),
            )
        );
	}
	
	public function createAction(Request $request)
	{
		$osoba = new Osoba();
        $form = $this->createForm(new OsobaType(), $osoba);
        /*
		$osoba->setUser(
            $this->get('security.context')->getToken()->getUser()
        );
		*/
        $form->bind($request);

        if ($form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($osoba);
            $entityManager->flush();

            return $this->redirect($this->generateUrl('profil_pregled', array('id' => $osoba->getId())));			
        }

        return $this->render(
            'SimpleProfileBundle:Osoba:new.html.twig',
            array(
                'osoba' => $osoba,
                'form' => $form->createView(),
            )
        );
	}
	
	public function showAction($id)
    {	
		$osoba = $this->getDoctrine()
			->getRepository('SimpleProfileBundle:Osoba')
			->find($id);
		
		if (!$osoba) {
            throw $this->createNotFoundException('Ne postoji osoba pod ovim id-om!');
        }
		return $this->render(
            'SimpleProfileBundle:Osoba:show.html.twig',
            array(
                'osoba' => $osoba,
            )
        );
    }
}
