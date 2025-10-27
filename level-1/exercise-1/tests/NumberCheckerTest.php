<?php

namespace Tests;

use Src\NumberChecker;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(NumberChecker::class)]

class NumberCheckerTest extends TestCase
{
    public function testEven() {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
        $this->assertTrue($checker->isPositive());
    }

    public function testOdd() {
        $checker = new NumberChecker(3);
        $this->assertFalse($checker->isEven());
        $this->assertTrue($checker->isPositive());
    }

    public function testNegative() {
        $checker = new NumberChecker(-2);
        $this->assertTrue($checker->isEven());
        $this->assertFalse($checker->isPositive());
    }

    public function testZero() {
        $checker = new NumberChecker(0);
        $this->assertTrue($checker->isEven());
        $this->assertFalse($checker->isPositive());
    }
}

?>

