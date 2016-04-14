<?php

namespace Registro\Bundle\RegistroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('appat')
            ->add('apmat')
            ->add('calle')
            ->add('noExt')
            ->add('noInt')
            ->add('colonia')
            ->add('delegacion')
            ->add('telefono')
            ->add('correo')
            ->add('nombre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Registro\Bundle\RegistroBundle\Entity\cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'registro_bundle_registrobundle_cliente';
    }
}
