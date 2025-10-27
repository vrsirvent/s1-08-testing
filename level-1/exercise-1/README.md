# s1-08-testing
**Descripció** TESTING
Level 1 - Exercise 1

Given the NumberChecker class, program the unit tests needed to certify that the class's source code does what it is supposed to do.
external link icon

<?php
class NumberChecker  {

	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}
}
?>

exercise-1/
	├── .phpunit.cache/
	│   	  └── test-results
	├── src/
	│    └── NumberChecker.php
	├── tests/
	│    └── NumberCheckerTest.php
	├── vendor/
	├── composer.json
	├── composer.lock
	├── phpunit.xml
	└── README.md



