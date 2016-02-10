<?php

namespace ASA\ChampionnatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('file', 'file')
            ->add('niveau', 'text')
            ->add('brassage', 'checkbox', array('required' => false))
            ->add('isSenior', 'checkbox', array('required' => false))
            ->add('enregistrer', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ASA\ChampionnatBundle\Entity\Equipe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'asa_championnatbundle_equipe';
    }
}
