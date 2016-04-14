<?php

namespace Inventario\Bundle\InventarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MedicamentosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('codigo')
            ->add('fecha')
            ->add('tipo')
            ->add('costo')
            ->add('precio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Inventario\Bundle\InventarioBundle\Entity\Medicamentos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inventario_bundle_inventariobundle_medicamentos';
    }
}
