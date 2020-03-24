<?php
use PHPUnit\Framework\TestCase;
require 'PrintNumbers.php';

class PrintNumberTests extends TestCase
{
    private $PrintNumber;

    protected function setUp():void {
        $this->PrintNumber = new PrintNumbers();
    }

    protected function tearDown():void {
        $this->PrintNumber = NULL;
    }

    public function testMultipleOfThree() {
        $result = $this->PrintNumber->getValue(3);
        $this->assertEquals("Linio", $result);
    }

    public function testMultipleOfFive() {
        $result = $this->PrintNumber->getValue(5);
        $this->assertEquals("IT", $result);
    }

    public function testMultipleOfBoth() {
        $result = $this->PrintNumber->getValue(15);
        $this->assertEquals("Linianos", $result);
    }

    public function testOtherValue() {
        $result = $this->PrintNumber->getValue(1);
        $this->assertEquals(1, $result);
    }

}


/**
 * ** PHPUnit installing through composer
 * composer require --dev phpunit/phpunit ^9
 * ** check version 
 * .\vendor\bin\phpunit --version
 * ** to run test
 * .\vendor\bin\phpunit PrintNumberTests.php
 */