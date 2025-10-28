<?php

namespace Tests;

use Src\SpeedSensor;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(SpeedSensor::class)]
class SpeedSensorTest extends TestCase {

    public function testUnknown() {
        $sensor = new SpeedSensor();
        $this->assertEquals('Unknown speed', $sensor->speedError('h'));
    }

    public function testInvalid() {
        $sensor = new SpeedSensor();
        $this->assertEquals('Invalid speed', $sensor->speedRange(0));
    }

    public function testVerySlow() {
        $sensor = new SpeedSensor();
        $this->assertEquals('Very slow speed', $sensor->speedRange(25));
    }

    public function testAppropriate() {
        $sensor = new SpeedSensor();
        $this->assertEquals('Appropriate speed', $sensor->speedRange(45));
    }

    public function testSlightlyExcessive() {
        $sensor = new SpeedSensor();
        $this->assertEquals('Slightly excessive speed', $sensor->speedRange(70));
    }

    public function testModeratelyExcessive() {
        $sensor = new SpeedSensor();
        $this->assertEquals('Moderately excessive speed', $sensor->speedRange(100));
    }

    public function testSeverelyExcessive() {
        $sensor = new SpeedSensor();
        $this->assertEquals('Severely excessive speed', $sensor->speedRange(130));
    }
}

?>