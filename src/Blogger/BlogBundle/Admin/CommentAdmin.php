<?php

namespace Blogger\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CommentAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('Blog', 'sonata_type_model', array(
                'class' => 'Blogger\BlogBundle\Entity\Blog',
                'property' => 'title',
            ))
            ->add('User', 'sonata_type_model', array(
                'class' => 'Blogger\BlogBundle\Entity\User',
                'property' => 'username',
            ))
            ->add('comment');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('comment')
            ->add('blog.title');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('comment')
            ->addIdentifier('blog.title');
    }
}