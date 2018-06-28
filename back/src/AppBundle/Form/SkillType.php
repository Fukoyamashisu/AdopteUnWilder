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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class SkillType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('skillName', TextType::class, ['label' => 'Nom de la compétence'])
            ->add('skillsOrder', IntegerType::class, ['label' => 'Importance de la compétence (De 1 à X)'])
            ->add('skillsLevel', IntegerType::class, ['label' => 'Niveau de maîtrise de la compétence (en %)']);
    }

}