<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint\IsType;

class AssertTest extends TestCase {

    // ****************//
    // STRING :: START //
    // ****************//

    public function testString() {
        $assert = new Assert();
        $bio = $assert->getBio();

        $this->assertStringStartsWith("I'm", $bio);

        $this->assertStringEndsWith("developer", $bio);
    }

    public function testNumbers() {
        $assert = new Assert();
        $assert->setNumber(18);
        $number = $assert->getNumber();

        // Greater
        $this->assertGreaterThan($number, 20);
     
        // Greater or Equal
        $this->assertGreaterThanOrEqual($number, 20);

        $this->assertLessThan(20, $number);
        $this->assertLessThanOrEqual(20, $number);
    }

    // ****************//
    // STRING :: START //
    // ****************//

    // **************//
    // EQUALS :: END //
    // **************//

    public function testEqual() {
        $this->assertEquals('Mateus', 'Mateus');
    }

    // **************//
    // EQUALS :: END //
    // **************//

    // *****************//
    // BOOLEAN :: START //
    // *****************//

    public function testBooleanTrue() {
        $this->assertTrue(file_exists('phpunit.xml'));
    }

    public function testBooleanFalse() {
        $this->assertFalse(file_exists('config.php'));
    }
    
    public function testNull() {
        $assert = new Assert();
        $number = $assert->getNumber();
        $this->assertNull($number);
    }

    // ***************//
    // BOOLEAN :: END //
    // ***************//
    
    // ***************//
    // ARRAY :: START //
    // ***************//

    public function testIsArray() {
        $assert = new Assert();
        $array = $assert->getArray();
        $this->assertIsArray($array);
    }

    public function testArrayHasKey(): void {
        $assert = new Assert();
        $array = $assert->getArray();

        $this->assertArrayHasKey('name', $array);
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

    // *************//
    // DIR :: START //
    // *************//

    // Directory starts at the project root

    public function testDirExists(): void {
        $this->assertDirectoryExists('class');
    }

    public function testDirPermission(): void {
        $this->assertDirectoryIsReadable('tests');
    }

    public function testDirWritable(): void {
        $this->assertDirectoryIsWritable('tests');
    }

    public function testFileExists(): void {
        $this->assertFileExists('phpunit.xml');
    }

    // public function testFileEquals() {
        // Necessary to create both files
        // $this->assertFileEquals('list1.text', 'list2.text');
    // }

    // ***********//
    // DIR :: END //
    // ***********//

}