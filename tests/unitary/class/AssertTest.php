<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint\IsType;

class AssertTest extends TestCase {

    // ***************//
    // ARRAY :: START //
    // ***************//

    public function testArrayHasKey(): void {
        $assert = new Assert();
        $array = $assert->getArray();

        $this->AssertArrayHasKey('name', $array);
    }

    public function testCount(): void {
        $assert = new Assert();
        $array = $assert->getArray();

        $this->assertCount(1, $array);
    }

    public function testEmpty(): void {
        $assert = new Assert();
        $array = [];

        $this->assertEmpty($array);
    }

    public function testContain(): void {
        $assert = new Assert();
        $array = $assert->getArray();
        
        $this->assertContains('Mateus', $array);
    }

    public function testThat(): void {
        $array = ['a','b','c'];

        // Use assertThat with a custom check
        $this->assertThat($array, new \PHPUnit\Framework\Constraint\Callback(function($array) {
            foreach ($array as $item) {
                if (!is_string($item)) {
                    return false;
                }
            }
            return true;
        }));
    }

    // *************//
    // ARRAY :: END //
    // *************//

    // ***************//
    // CLASS :: START //
    // ***************//

    public function testAttributeExists(): void {
        $reflector = new \ReflectionClass(Assert::class);
        
        // Check attribute 'number' exists on the classe Assert
        $this->assertTrue($reflector->hasProperty('number'));
    }

    // *************//
    // CLASS :: END //
    // *************//
    
    // ***************//
    // REGEX :: START //
    // ***************//

    public function testRegex(): void {
        $this->assertMatchesRegularExpression('/^[a-z]{3}$/', 'try');
    }

    // *************//
    // REGEX :: END //
    // *************//
}