<?php

namespace FrontBundle\Controller\Game;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class GameController extends Controller
{
    /**
    * @Route("/play", name="number_game_play")
    */
    public function playAction(Request $request)
    {
        $form = $this->createFormBuilder();
        $form = $form->add('number', IntegerType::class);
        $form = $form->add('save', SubmitType::class);
        $form = $form->getForm();
        $limitService = $this->get('limitService');
        
        return $this->render('FrontBundle:Home:home.html.twig', array(
            'form' => $form->createView(),
            'limitService' => $limitService,
        ));
    }
}