<?php
namespace BionicUniversity\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'subjects',
            'choice',
            array(
                'choices' => array(
                    'Выставка' => 'Выставка',
                    'Концерт' => 'Концерт',
                    'Семинар' => 'Семинар',
                    'Литературный вечер' => 'Литературный вечер',
                    'Фильм' => 'Фильм',
                    'Музей' => 'Музей',
                    'Театр' => 'Театр',
                    'Открытие нового заведения' => 'Открытие нового заведения',
                    'Вечеринка' => 'Вечеринка',
                    'Мастер-класс' => 'Мастер-класс'
                ),
                'label' => false,
                'required' => false,
                'empty_value' => false,
                'attr' => array('class' => 'sf1choice')
            )
        );
        $builder->add('Применить', 'submit',
            array(
                'attr' => array('class' => 'acce1but')
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'BionicUniversity\UserBundle\Entity\Post'
            )
        );
    }


    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'post_filter';
    }
}