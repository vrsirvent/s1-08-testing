# s1-08-testing
**Descripció** TESTING
Level 1 - Exercise 2

We are programming the logic for a vehicle speed sensor. The different levels are:

 < 30 km/h: Very slow
 30-60 km/h: Appropriate speed
 61-80 km/h: Slightly excessive
 81-100 km/h: Moderately excessive
 > 100 km/h: Severely excessive

Create a program (using TDD) that, given a specific speed, returns the corresponding threshold based on the descriptions above.

exercise-2/
	├── .phpunit.cache/				# folder excluded from GitHub (.gitignore)
	│   	  └── test-results
	├── .vscode/					# folder excluded from GitHub (.gitignore)
	│   	  └── launch.json
	├── src/
	│    └── SpeedSensor.php
	├── tests/
	│    └── SpeedSensorTest.php
	├── vendor/						# folder excluded from GitHub (.gitignore)
	├── .gitignore
	├── composer.json
	├── composer.lock				# file excluded from GitHub (.gitignore)
	├── phpunit.xml
	└── README.md


