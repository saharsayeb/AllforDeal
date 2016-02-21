<?php

namespace Application\ServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class rechercherForm extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomService')
                ->add('', 'submit');
    }

    public function getName() {
        // return 'Modele';
    }

}
