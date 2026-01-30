<?php
/**
 * Tests for ReinforceLab
 */

use PHPUnit\Framework\TestCase;
use Reinforcelab\Reinforcelab;

class ReinforcelabTest extends TestCase {
    private Reinforcelab $instance;

    protected function setUp(): void {
        $this->instance = new Reinforcelab(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Reinforcelab::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
