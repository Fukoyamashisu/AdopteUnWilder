<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 28/06/18
 * Time: 19:15
 */

namespace AppBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ExperiencesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('experienceTitle', TextType::class, ['label' => 'Titre de votre expérience'])
            ->add('experienceDescription', TextareaType::class, ['label' => 'Description de votre expérience'])
            ->add('experienceDate', TextType::class, ['label' => 'Date de votre expérience'])
            ->add('isHidden', IntegerType::class, ['label' => 'Voulez vous afficher cette expérience ?']);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Experience',
        ));
    }
}