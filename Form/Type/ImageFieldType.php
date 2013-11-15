<?php

namespace SymfonyContrib\Bundle\ImageFieldBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Advanced file form field.
 */
class ImageFieldType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'preview_type' => 'image',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'filefield';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'imagefield';
    }
}
