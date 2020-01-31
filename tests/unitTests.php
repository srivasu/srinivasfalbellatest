<?php
include_once 'vendor/autoload.php';
include_once 'index.php';

use PHPUnit\Framework\TestCase;

final class indexTest extends TestCase
{
    public function testGetInit() {
        $test = new Test();
        $actual = $test->getInit();
        $this->assertEquals(1, $actual);
    }

    public function testGetEnd() {
        $test = new Test();
        $actual = $test->getEnd();
        $this->assertEquals(100, $actual);
    }

    public function testSetInit() {
        $test = new Test();
        $test->setInit(50);
        $actual = $test->getInit();
        $this->assertEquals(50, $actual);
    }

    public function testSetEnd() {
        $test = new Test();
        $test->setEnd(150);
        $actual = $test->getEnd();
        $this->assertEquals(150, $actual);
    }

    public function testMakeTest() {
        $test = new Test();
        $actual = $test->makeTest();
        $this->assertTrue($actual);
    }

    public function testCheckNumber() {
        $test = new Test();
        $actual = $test->checkNumber(1, array('3'=>'Linio'));
        $this->assertTrue(is_string($actual));
    }
}