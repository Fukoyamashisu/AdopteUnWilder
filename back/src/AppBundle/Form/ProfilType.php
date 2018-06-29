<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ProfilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',TextType::class, ['label' => 'Prénom',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
            ->add('lastName',TextType::class, ['label' => 'Nom',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
            ->add('adress',TextType::class, ['label' => 'Adresse',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
            ->add('phoneNumber',TextType::class, ['label' => 'Numéro de téléphone',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
            ->add('availability',TextType::class, ['label' => 'Disponibilité',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
            ->add('profilPicture', FileType::class, array(
                'data_class' => null,
                'required' => false,
                'label' => 'Photo de profil'))
            ->add('coverPicture', FileType::class, array(
                'data_class' => null,
                'required' => false,
                'label' => 'Photo de couverture'))
            ->add('wildPromo',TextType::class, ['label' => 'Année Promotion',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
            ->add('workingArea',TextType::class, ['label' => 'Mobilité',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
            ->add('profilTitle',TextType::class, ['label' => 'Titre du profil',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
            ->add('profilDescription',TextType::class, ['label' => 'Description',
                'constraints' => new NotBlank(['message' => 'Ce champs ne doit pas être vide'])])
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


}
