<?php
namespace BionicUniversity\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PostType extends AbstractType
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
                'label' => 'Тематика',
                'required' => false,
                'empty_value' => false,
                'attr' => array('class' => 'sfchoice')
            )
        );
        $builder->add(
            'theme',
            'text',
            array(
                'label' => 'Заголовок',
            )
        );
        $builder->add(
            'text',
            'textarea',
            array(
                'label' => 'Текст',
            )
        );
        $builder->add(
            'phone',
            'number',
            array(
                'label' => 'Телефон для связи',
            )
        );
        $builder->add(
            'startTime',
            'datetime',
            array(
                'label' => 'Начало мероприятия',
                'attr' => array('class' => 'timeatrr')
            )
        );
        $builder->add('Опубликовать', 'submit',
        array(
            'attr' => array('class' => 'accebut')
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
        return 'post';
    }
}