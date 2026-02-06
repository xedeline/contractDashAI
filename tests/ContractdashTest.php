<?php
/**
 * Tests for contractDash
 */

use PHPUnit\Framework\TestCase;
use Contractdash\Contractdash;

class ContractdashTest extends TestCase {
    private Contractdash $instance;

    protected function setUp(): void {
        $this->instance = new Contractdash(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractdash::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
