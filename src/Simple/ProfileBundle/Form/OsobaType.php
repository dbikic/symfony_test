<?php

namespace Simple\ProfileBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OsobaType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('phone')
            ->add('email')
            ->add('address')
		;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'Simple\ProfileBundle\Entity\Osoba'));
    }

    public function getName()
    {
        return 'simple_profilebundle_osobatype';
    }
}
