<?php declare(strict_types = 1);

/*
 * This file is part of the Bukashk0zzzBooleanTypeBundle
 *
 * (c) Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\BooleanTypeBundle\Tests;

use Bukashk0zzz\BooleanTypeBundle\Form\Type\BooleanType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Test\TypeTestCase;

/**
 * Test the BooleanTypeTest
 */
class BooleanTypeTest extends TypeTestCase
{
    /**
     * @var int
     */
    protected $status;

    /**
     * Test type
     */
    public function testType(): void
    {
        $this->status = true;
        $form = $this->factory->create(BooleanType::class);
        $form->submit($this->status);
        $this->assertForm($form);

        $this->status = false;
        $form = $this->factory->create(BooleanType::class);
        $form->submit($this->status);
        $this->assertForm($form);

        $form = $this->factory->create(BooleanType::class);
        $form->submit('');
        static::assertSame('', $form->getViewData());
    }

    /**
     * @param FormInterface $form
     *
     * @return void
     */
    private function assertForm(FormInterface $form): void
    {
        static::assertTrue($form->isSynchronized());
        static::assertSame((string) $this->status, $form->getViewData());
    }
}
