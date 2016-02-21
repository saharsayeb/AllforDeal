<?php
namespace Application\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  Application\ServiceBundle\Entity\Service;
use  Application\ServiceBundle\Form\ajoutForm;
use  Application\ServiceBundle\Form\modifierForm;
use  Application\ServiceBundle\Form\rechercheForm;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiceController
 *
 * @author SaharS
 */

class ServiceController extends Controller
{
    
         public function ajoutAction()
    {
        
        $serv=new Service();//instantiation de l'entitée Model
        $form=$this->createForm(new ajoutForm(), $serv); //on associe la classe formulaire à l'entitée qui lui correspond 
        $d=new \DateTime();
        $serv->setDateAjout($d);
        $request=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
   
       if($form->isValid()){
          try{
             $em=$this->getDoctrine()->getManager();
             $em->persist($serv);
             $em->flush();
              return $this->redirectToRoute('service_offre');

               }
             catch (\Doctrine\DBAL\DBALException $e){
                return new \Symfony\Component\HttpFoundation\Response("Voulez vous compléter tous les champs");
            }
             
      
            }
            
        return $this->render('ServiceBundle:Service:ajout.html.twig',array('Form'=>$form->createView()));//schéma twig
    
        }
    public function offreAction()
    {
       $em=$this->getDoctrine()->getManager(); 
       $serv=$em->getRepository('ServiceBundle:Service')->findAll();
       
        return $this->render('ServiceBundle:Service:offre.html.twig', array('serv'=> $serv));
    }
    
    public function modifierAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $serv=$em->getRepository('ServiceBundle:Service')->find($id);
        $form=$this->createForm(new modifierForm(),$serv);
        $request=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em->persist($serv);
            $em->flush();
            return $this->redirectToRoute('service_offre');
        }
        return $this->render('ServiceBundle:Service:modifier.html.twig',array('Form'=>$form->createView()));
    }
    
     public function supprimerAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $serv=$em->getRepository('ServiceBundle:Service')->find($id);
        $em->remove($serv);
        $em->flush();
        return $this->redirectToRoute('service_offre');
    }
    
    public function mesServicesAction()
    {
       $em=$this->getDoctrine()->getManager(); 
       $serv=$em->getRepository('ServiceBundle:Service')->find($iduser);
       
        return $this->render('ServiceBundle:Service:mesServices.html.twig', array('serv'=> $serv));
    }
    
    public function rechercheAction() {
        $req=$this->getRequest();
        if($req->getMethod()=="POST")
        {
            $nomService=$req->get('nomService');
         
        
        $em=$this->getDoctrine()->getManager();
        $serv=$em->getRepository('ServiceBundle:Service')->findByNomService($nomService);
        
        return $this->render('ServiceBundle:Service:recherche.html.twig', array('serv'=> $serv));
            
        }
 else {
     
 }
      $em=$this->getDoctrine()->getManager(); 
       $serv=$em->getRepository('ServiceBundle:Service')->findAll();
       
        return $this->render('ServiceBundle:Service:recherche.html.twig', array('serv'=> $serv));
       
    }
    
}