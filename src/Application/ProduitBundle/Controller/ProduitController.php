<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProduitController
 *
 * @author Super
 */

namespace  Application\ProduitBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Application\ProduitBundle\Entity\Produit;

use Application\ProduitBundle\Form\ProduitForm;

class ProduitController extends Controller{
   public function ajoutAction()
    {
        $produit=new Produit();//instantiation de l'entitée Model
        $form = $this->createForm(new ProduitForm(), $produit); //on associe la classe formulaire à l'entitée qui lui correspond 
        $request=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('produit_ajout');
        }
        return $this->render('ProduitBundle:Produit:ajoutP.html.twig',array('Form'=>$form->createView()));
    }
     public function affichePAction() {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->findAll();
        return $this->render('ProduitBundle:Produit:afficheP.html.twig', array('Produit' => $produit));
    }
    public function supprimerPAction($id) {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->find($id);
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('produit_afficheP');
    }
    public function modifierPAction($id) {

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProduitBundle:Produit')->find($id);
        $form = $this->createForm(new ProduitForm(), $produit);
        $request = $this->get('request_stack')->getCurrentRequest();

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('produit_afficheP');
        }

        return $this->render('ProduitBundle:Produit:modifierP.html.twig', array('Form' => $form->createView()));
    }
    
}

