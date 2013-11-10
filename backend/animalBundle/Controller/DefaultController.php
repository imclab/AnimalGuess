<?php

namespace tr\animalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('tranimalBundle:Default:index.html.twig');
    }
    
    public function getMaxIDAction()
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('tranimalBundle:Animal');
        $res=$repo->getMaxID();
        
        
        $template=$this->render('tranimalBundle:Default:res.html.twig', array('res'=>json_encode($res)));
        $template=$this->setExtraHeader($template);

        return $template;
    }
    
    public function getAnimalCountAction()
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('tranimalBundle:Animal');
        $res=$repo->getAnimalCount();
        
        $template=$this->render('tranimalBundle:Default:res.html.twig', array('res'=>json_encode($res)));
        $template=$this->setExtraHeader($template);
        
        return $template;
    }
    
    public function getNextQuestionAction($id, $answer)
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('tranimalBundle:Animal');
        $res=$repo->getNextQuestion($id, $answer);
                
        $template=$this->render('tranimalBundle:Default:res.html.twig', array('res'=>json_encode($res)));
        $template=$this->setExtraHeader($template);
        return $template;
    }
    
    public function getQuestionByIdAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('tranimalBundle:Animal');
        $res=$repo->getQuestionById($id);
        
        $template=$this->render('tranimalBundle:Default:res.html.twig', array('res'=>json_encode($res)));
        $template=$this->setExtraHeader($template);

        return $template;
    }
            
    
    public function setNewQuestionAction($id, $question, $animal1, $animal2)
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('tranimalBundle:Animal');
        $res=$repo->setNewQuestions($id, $question, $animal1, $animal2);
                
        $template=$this->render('tranimalBundle:Default:res.html.twig', array('res'=>json_encode($res)));
        $template=$this->setExtraHeader($template);
        
        return $template;
    }
    
    private function setExtraHeader(Response $template)
    {
        $template->headers->set('Access-Control-Allow-Origin','*,');
        $template->headers->set('Access-Control-Allow-Methods', 'GET');
        $template->headers->set('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
        
        $template->headers->set('Content-Type', 'text/plain');
        
        return $template;
        
    }
}
