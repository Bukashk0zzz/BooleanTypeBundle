<?php declare(strict_types = 1);

/*
 * This file is part of the Bukashk0zzzBooleanTypeBundle
 *
 * (c) Denis Golubovskiy <bukashk0zzz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bukashk0zzz\BooleanTypeBundle\Tests\DependencyInjection;

use Bukashk0zzz\BooleanTypeBundle\DependencyInjection\Bukashk0zzzBooleanTypeExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Bukashk0zzzBooleanTypeExtensionTest
 */
class Bukashk0zzzBooleanTypeExtensionTest extends TestCase
{
    /**
     * @var Bukashk0zzzBooleanTypeExtension Bukashk0zzzBooleanTypeExtension
     */
    private $extension;

    /**
     * @var ContainerBuilder Container builder
     */
    private $container;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->extension = new Bukashk0zzzBooleanTypeExtension();
        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
    }

    /**
     * Test load extension
     */
    public function testLoadExtension(): void
    {
        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();

        // Check that services have been loaded
        static::assertTrue($this->container->has('boolean.type'));
    }
}
