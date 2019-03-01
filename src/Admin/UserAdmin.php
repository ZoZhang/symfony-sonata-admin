<?php

// src/Admin/UserAdmin.php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

final class UserAdmin extends AbstractAdmin
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
                        'username',
                        TextType::class,
                        ['required' => true]
                    )
                    ->add(
                        'mail',
                        TextType::class,
                        ['required' => true]
                    )
                    ->add(
                        'password',
                        PasswordType::class,
                        ['required' => true]
                    )
                    ->end()
                    ->with('Information')
                    ->add(
                        'sex',
                        ChoiceType::class, [
                        'choices' => [
                            'Femme' => 0,
                            'Homme' => 1,
                        ]
                    ])
                    ->add(
                        'website',
                        TextType::class,
                        ['required' => false]
                    )

                    ->add(
                        'cell_number',
                        TextType::class
                    )
                    ->add(
                        'biography',
                        TextareaType::class
                    )

                    ->add(
                        'address',
                        TextareaType::class
                    )

                    ->add(
                        'ip_address',
                        TextType::class
                    )
                    ->end();
    }

    /**
     * @return array
     */
    private function getDateFormat()
    {
        return [
            'pattern' => 'dd MMM y G',
            'locale' => 'fr',
            'timezone' => 'Europe/Paris',
        ];
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
                   ->add('username')
                   ->add('name')
                   ->add(
                       'sex',
                       'choice' ,
                       [
                       'choices' => [
                           0 => 'Femme',
                           1 => 'Homme',
                       ]
                   ])
                   ->add('mail')
                   ->add('cell_number')
                   ->add('ip_address')
                   ->add('register_date','date', $this->getDateFormat())

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
            ->add('username')
            ->add('name')
            ->add('mail')
        ;
    }

    /**
     * @param $object
     * @return string
     */
    public function toString($object)
    {
        return 'Utilisateur ' . $object->getName() ?? ' '; // shown in the breadcrumb on the create view
    }

}
