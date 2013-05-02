<?php
/* Employee Test cases generated on: 2012-11-05 22:37:34 : 1352122654*/
App::import('Model', 'Employee');

class EmployeeTestCase extends CakeTestCase {
	var $fixtures = array('app.employee');

	function startTest() {
		$this->Employee =& ClassRegistry::init('Employee');
	}

	function endTest() {
		unset($this->Employee);
		ClassRegistry::flush();
	}

}
