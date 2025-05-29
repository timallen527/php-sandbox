<?php

namespace Sandbox\Sample\Tests;

use Mockery;
use PHPUnit\Framework\TestCase;
use Sandbox\Sample\SampleClass;

class SampleTest extends TestCase
{
    private SampleClass $sample;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sample = new SampleClass();
    }

    public function testClass(): void
    {
        $this->assertTrue($this->sample->returnsTrue());
    }

    public function testMockedClass(): void
    {
        $mock_class = Mockery::mock(SampleClass::class);
        $mock_class
            ->expects()
            ->returnsTrue()
            ->andReturn(false);

        $this->assertFalse($mock_class->returnsTrue());
    }

    protected function tearDown(): void
    {
        // This verifies that all expected mock calls occurred.
        Mockery::close();

        parent::tearDown();
    }
}
