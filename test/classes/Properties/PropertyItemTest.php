<?php

declare(strict_types=1);

namespace PhpMyAdmin\Tests\Properties;

use PhpMyAdmin\Properties\PropertyItem;
use PhpMyAdmin\Tests\AbstractTestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\MockObject\MockObject;

#[CoversClass(PropertyItem::class)]
class PropertyItemTest extends AbstractTestCase
{
    /** @var PropertyItem&MockObject */
    protected PropertyItem $stub;

    /**
     * Configures global environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->stub = $this->getMockForAbstractClass(PropertyItem::class);
    }

    /**
     * tearDown for test cases
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->stub);
    }

    public function testGetGroup(): void
    {
        $this->assertEquals(
            null,
            $this->stub->getGroup(),
        );
    }
}
