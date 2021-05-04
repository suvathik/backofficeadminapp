<?php


namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('firstName', TextType::class);
        $formMapper->add('lastName', TextType::class);
        $formMapper->add('phone', TextType::class);
        $formMapper->add('email', TextType::class);
        $formMapper->add('password', TextType::class);
//        $formMapper->add('roles', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('firstName');
        $datagridMapper->add('lastName');
        $datagridMapper->add('phone');
        $datagridMapper->add('email');
        $datagridMapper->add('password');
//        $datagridMapper->add('roles');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('firstName');
        $listMapper->addIdentifier('lastName');
        $listMapper->addIdentifier('phone');
        $listMapper->addIdentifier('email');
        $listMapper->addIdentifier('password');
        $listMapper->addIdentifier('roles');

        $listMapper
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
}