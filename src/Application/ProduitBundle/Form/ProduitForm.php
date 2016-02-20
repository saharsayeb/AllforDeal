<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Application\ProduitBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of ProduitForm
 *
 * @author super
 */
class ProduitForm extends AbstractType{
     public function getName() {
        return 'ProduitName';
    } 
    public function buildForm( FormBuilderInterface $builder, 
           array $options) {
       $builder->add('categorie')
               ->add('titre')
               ->add('description')
               //->add('rawContent') // source content
               //->add('description', 'sonata_formatter_type', array(
                  //      'source_field' => 'rawContent',
                  //      'target_field' => 'content'))
               ->add('prix')
                 ->add('zone','entity',
                       array('class'=>'ServiceBundle:Zone',
                           'property'=>'nom',
                           
                           'label'=>'zone : '))
               ->add('', 'submit');
    }
   
}
