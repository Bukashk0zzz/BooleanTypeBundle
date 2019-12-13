<?php declare(strict_types = 1);

namespace Bukashk0zzz\BooleanTypeBundle\Tests;

use Bukashk0zzz\BooleanTypeBundle\Form\Type\BooleanType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Test\TypeTestCase;

/**
 * @internal
 * @coversNothing
 */
final class BooleanTypeTest extends TypeTestCase
{
    /**
     * @var int
     */
    protected $status;

    /**
     * Test type.
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
        self::assertSame('', $form->getViewData());
    }

    private function assertForm(FormInterface $form): void
    {
        self::assertTrue($form->isSynchronized());
        self::assertSame((string) $this->status, $form->getViewData());
    }
}
