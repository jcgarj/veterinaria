<?php

namespace Registro\Bundle\RegistroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MascotaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('peso')
            ->add('edad')
            ->add('color')
            ->add('especie')
            ->add('raza')
            ->add('cliente', 'entity', array(
                'class' => 'RegistroBundle:cliente',
                'property' => 'nombre'))
            ->add('MVZ', 'entity', array(
                'class' => 'RegistroBundle:MVZ',
                'property' => 'nombre'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Registro\Bundle\RegistroBundle\Entity\Mascota'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'registro_bundle_registrobundle_mascota';
    }
}
