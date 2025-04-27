<?php

use PHPUnit\Framework\TestCase;

class EnviromentTest extends TestCase
{
    public function testFileExists() {
        $this->assertTrue(
            file_exists('phpunit.xml')
        );
    }
}
