<?php

namespace SymfonyContrib\Bundle\ImageFieldBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

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
            'accept'       => 'image/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        // Restrict file extensions.
        if (empty($options['js_options']['acceptFileTypes'])) {
            $view->vars['data_attr']['data-accept-file-types'] = '/(\.|\/)(gif|jpe?g|png|bmp)$/i';
        }
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
