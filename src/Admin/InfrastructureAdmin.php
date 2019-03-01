<?php

// src/Admin/InfrastructureAdmin.php

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

final class InfrastructureAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('General')
            ->add(
                'type',
                TextType::class,
                ['required' => true,]
            )
            ->add(
                'level',
                TextType::class,
                ['required' => true,]
            )
            ->add(
                'description',
                TextareaType::class,
                ['required' => true,]
            )
            ->add(
                'family',
                TextType::class,
                ['required' => true,]
            )
            ->add(
                'price',
                TextType::class,
                ['required' => true,]
            )
            ->add(
                'ressources_consumption',
                TextType::class,
                ['required' => true,]
            )
            ->add(
                'item_capacity',
                TextType::class,
                ['required' => true,]
            )
            ->add(
                'horse_capacity',
                TextType::class,
                ['required' => true,]
            )
            ->end();
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
            ->add('type')
            ->add('level')
            ->add('description')
            ->add('family')
            ->add('price')
            ->add('ressources_consumption')
            ->add('item_capacity')
            ->add('horse_capacity')
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
            ->add('type')
            ->add('level')
            ->add('description')
            ->add('family')
            ->add('price')
        ;
    }

    /**
     * @param $object
     * @return string
     */
    public function toString($object)
    {
        return 'Horse Infrastructure' . $object->getId() ?? ' ';
    }

}
