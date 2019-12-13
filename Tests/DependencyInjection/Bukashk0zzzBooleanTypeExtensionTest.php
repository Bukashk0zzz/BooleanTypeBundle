<?php declare(strict_types = 1);

namespace Bukashk0zzz\BooleanTypeBundle\Tests\DependencyInjection;

use Bukashk0zzz\BooleanTypeBundle\DependencyInjection\Bukashk0zzzBooleanTypeExtension;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @internal
 */
final class Bukashk0zzzBooleanTypeExtensionTest extends TestCase
{
    /**
     * @var Bukashk0zzzBooleanTypeExtension Bukashk0zzzBooleanTypeExtension
     */
    private $extension;

    /**
     * @var ContainerBuilder Container builder
     */
    private $container;

    protected function setUp(): void
    {
        $this->extension = new Bukashk0zzzBooleanTypeExtension();
        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
    }

    /**
     * Test load extension.
     */
    public function testLoadExtension(): void
    {
        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();

        // Check that services have been loaded
        self::assertTrue($this->container->has('boolean.type'));
    }
}
