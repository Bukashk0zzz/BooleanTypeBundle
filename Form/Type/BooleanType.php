<?php declare(strict_types = 1);

namespace Bukashk0zzz\BooleanTypeBundle\Form\Type;

use Bukashk0zzz\BooleanTypeBundle\Form\DataTransformer\BooleanTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class BooleanType
 */
class BooleanType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param mixed[]              $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if (!$options['transform']) {
            return;
        }

        $builder->addModelTransformer(new BooleanTransformer());
    }

    /**
     * Set parameters for the boolean field. Acceptable values: true, false.
     * Default value: false
     *
     * @param OptionsResolver $resolver
     *
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'choices' => [
                    true,
                    false,
                ],
                'transform' => true,
                'compound' => false,
                'empty_data' => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getParent(): string
    {
        return TextType::class;
    }

    /**
     * @return null|string
     */
    public function getBlockPrefix(): string
    {
        return 'checkbox';
    }
}
