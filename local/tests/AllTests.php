<?php
require_once(dirname(__FILE__) . '/moodletest.php');
require_once(dirname(__FILE__) . '/example/AllTests.php');

class AllTests {
	
	public static function suite(){
		$suite = new PHPUnit_Framework_TestSuite('Moodle');
		$suite->addTest(Example_AllTests::suite());
		return $suite;
	}
	
	
}
