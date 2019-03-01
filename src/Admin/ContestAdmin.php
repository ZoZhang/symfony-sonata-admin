<?php

// src/Admin/ContestAdmin.php

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

final class ContestAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('General')
                    ->add(
                        'start_date',
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
                   ->add('start_date')
                   ->add('end_date')
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
            ->add('start_date')
            ->add('end_date')
        ;
    }

    /**
     * @param $object
     * @return string
     */
    public function toString($object)
    {
        return 'Horse Contest ' . $object->getId() ?? ' ';
    }

}
