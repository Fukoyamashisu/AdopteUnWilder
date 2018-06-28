<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('adress')
            ->add('phoneNumber')
            ->add('availability')
            ->add('profilPicture', FileType::class, array(
                'data_class' => null,
                'required' => false,
                'label' => 'Photo de profil'))
            ->add('coverPicture', FileType::class, array(
                'data_class' => null,
                'required' => false,
                'label' => 'CoverPhoto'))
            ->add('wildPromo')
            ->add('workingArea')
            ->add('profilTitle')
            ->add('profilDescription')
            ->add('cvLink', FileType::class, array(
                'data_class' => null,
                'required' => false,
                'label' => 'Photo'));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Profil'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_profil';
    }


}
