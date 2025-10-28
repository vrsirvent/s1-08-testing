<?php

namespace Src;

class SpeedSensor {

    public function speedError($speed) {
        if (!is_numeric($speed) || $speed < 0) {
            return 'Unknown speed';
        }
        return null;
    }

    public function speedRange($speed) {

        if ($speed === 0) {
            return 'Invalid speed';
        }

        switch (true) {
            case ($speed < 30):
                return 'Very slow speed';
            case ($speed <= 60):
                return 'Appropriate speed';
            case ($speed <= 80):
                return 'Slightly excessive speed';
            case ($speed <= 100):
                return 'Moderately excessive speed';
            default:
                return 'Severely excessive speed';
        }
    }
}

?>