<?php


namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class OrderAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
//        $formMapper->add('user', TextType::class);
        $formMapper->add('employee', TextType::class);
        $formMapper->add('product', TextType::class);
        $formMapper->add('price', TextType::class);
        $formMapper->add('notes', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
//        $datagridMapper->add('user');
        $datagridMapper->add('employee');
        $datagridMapper->add('product');
        $datagridMapper->add('price');
        $datagridMapper->add('notes');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
//        $listMapper->addIdentifier('user');
        $listMapper->addIdentifier('employee');
        $listMapper->addIdentifier('product');
        $listMapper->addIdentifier('price');
        $listMapper->addIdentifier('notes');


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