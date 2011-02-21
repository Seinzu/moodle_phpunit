<?php

require_once(dirname(__FILE__) . '/testExample.php');

class Example_AllTests {

	public static function suite(){
		
        	$suite = new PHPUnit_Framework_TestSuite('Example');
 
        	$suite->addTestSuite('Example_ExampleTest');
        
        	return $suite;
    	}

}
