<?php

namespace FrontBundle\Controller\Game;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

class GameController extends Controller
{
    /**
    * @Route("/play", name="number_game_play")
    */
    public function playAction(Request $request)
    {
        $limitService = $this->get('limitService');
        $mysteryNumber = rand($limitService->getMinValue(), $limitService->getMaxValue());
        $session = $request->getSession();
        $session->set('number', $mysteryNumber);
        
        $form = $this->createFormBuilder();
        $form = $form->add('number', IntegerType::class);
        $form = $form->add('save', SubmitType::class);
        $form = $form->getForm();

        return $this->render('FrontBundle:Home:home.html.twig', array(
            'form' => $form->createView(),
            'limitService' => $limitService,
        ));
    }
    
    /**
    * @Route("/ajaxPlay/{number}", name="number_game_ajax_check_answer")
    */
    public function playAjaxAction(Request $request, $number)
    {
        $referer = $request->server->get('HTTP_REFERER');
        if(is_null($referer)){
            $result = array('401' => 'unauthorized');
            return $this->json($result);
        }
        $session = $request->getSession();
        $numberToGuess = $session->get('number');
        if($numberToGuess > $number){
            $result = array('+' => $number);
        }
        else if ($numberToGuess < $number){
            $result = array('-' => $number);
        }
        else{
            $result = array('=' => $number);
        }
        return $this->json($result);
    }
}