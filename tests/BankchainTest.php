<?php
/**
 * Tests for BankChain
 */

use PHPUnit\Framework\TestCase;
use Bankchain\Bankchain;

class BankchainTest extends TestCase {
    private Bankchain $instance;

    protected function setUp(): void {
        $this->instance = new Bankchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bankchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
