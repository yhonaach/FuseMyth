<?php
/**
 * Tests for FuseMyth
 */

use PHPUnit\Framework\TestCase;
use Fusemyth\Fusemyth;

class FusemythTest extends TestCase {
    private Fusemyth $instance;

    protected function setUp(): void {
        $this->instance = new Fusemyth(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fusemyth::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
