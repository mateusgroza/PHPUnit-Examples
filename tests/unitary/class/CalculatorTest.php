<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class CalculatorTest extends TestCase {
    #[DataProvider('additionProvider')]
    public function testAddition($n1, $n2, $esperado): void {
        $cal = new Calculator();

        $this->assertEquals(
            $esperado,
            $cal->Addition($n1, $n2)
        );
    }

    public static function additionProvider(): array {
        return [
            [1, 1, 2],
            [-50, 10, -40],
            [2.5, 2.5, 5],
        ];
    }
}