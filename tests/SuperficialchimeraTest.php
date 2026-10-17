<?php
/**
 * Tests for SuperficialChimera
 */

use PHPUnit\Framework\TestCase;
use Superficialchimera\Superficialchimera;

class SuperficialchimeraTest extends TestCase {
    private Superficialchimera $instance;

    protected function setUp(): void {
        $this->instance = new Superficialchimera(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Superficialchimera::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
