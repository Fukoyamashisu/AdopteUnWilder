<?php

namespace AppBundle\Form;

use AppBundle\Entity\Picture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PictureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pathFile', FileType::class, ['label' => '', 'required' => false])
            ->add('pictureDescription', TextareaType::class, [
                'label' => 'Description de la photo',
                'required' => false]);

            if(!$options['is_main']) {
                $builder
                    ->add('isMain', ChoiceType::class, [
                        'choices' => [
                            'Oui' => 1,
                            'Non' => 0],
                        'expanded' => true,
                        'multiple' => false,
                        'label' => 'Photo principale:']);
            }

    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Picture::class,

            'is_main'=> false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_picture';
    }


}
