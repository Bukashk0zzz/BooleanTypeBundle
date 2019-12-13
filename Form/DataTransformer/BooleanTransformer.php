<?php declare(strict_types = 1);

namespace Bukashk0zzz\BooleanTypeBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class BooleanTransformer implements DataTransformerInterface
{
    public const FORM_TRUE = 1;

    /**
     * @param mixed $value
     *
     * @return mixed
     */
    public function transform($value)
    {
        return $value;
    }

    /**
     * @param mixed $value
     */
    public function reverseTransform($value): bool
    {
        return \mb_strtolower((string) $value) === 'true' || (int) $value === self::FORM_TRUE;
    }
}
