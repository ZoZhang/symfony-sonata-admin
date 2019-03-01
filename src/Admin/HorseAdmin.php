<?php

// src/Admin/HorseAdmin.php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

final class HorseAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
         $formMapper->with('General')
                    ->add(
                        'name',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'breedid',
                        TextType::class,
                        ['required' => false,]
                    )
                    ->add(
                        'level',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'experience',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'general_state',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'toughness',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'stamina',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'jump_range',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'intelligence',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'temper_id',
                        TextType::class,
                        ['required' => false,]
                    )
                    ->add(
                        'health',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'moodid',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'stress',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'tiredness',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'hunger',
                        TextType::class,
                        ['required' => true,]
                    )
                    ->add(
                        'dirtiness',
                        TextType::class,
                        ['required' => false,]
                    )

                    ->end();
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
                   ->add('name')
                   ->add('breedid')
                   ->add('level')
                   ->add('experience')
                   ->add('general_state')
                   ->add('toughness')
                   ->add('stamina')
                   ->add('jump_range')
                   ->add('speed')
                   ->add('sociability')
                   ->add('intelligence')
                   ->add('temper_id')
                   ->add('health')
                   ->add('moodid')
                   ->add('stress')
                   ->add('tiredness')
                   ->add('hunger')
                   ->add('dirtiness')
                   ->add('_action', 'actions', [
                        'actions' => [
                            'edit' => [],
                            'delete' => [],
                        ]
                   ])
            ;
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id')
            ->add('name')
        ;
    }

    /**
     * @param $object
     * @return string
     */
    public function toString($object)
    {
        return 'Horse ' . $object->getName() ?? ' ';
    }

}
