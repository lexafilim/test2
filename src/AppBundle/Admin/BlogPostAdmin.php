<?php 

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
{
    $formMapper
        ->add('title', 'text')
        ->add('body', 'textarea')
        ->add('category', 'sonata_type_model', array(
            'class' => 'AppBundle\Entity\Category','property' => 'name',))
    ;
}

    protected function configureListFields(ListMapper $listMapper)
    {
         $listMapper
            ->addIdentifier('title')
            ->add('category.name')
            ->add('draft')
        ;
    }
    
	
}