<?php
/* Employees Test cases generated on: 2012-11-05 22:38:11 : 1352122691*/
App::import('Controller', 'Employees');

class TestEmployeesController extends EmployeesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmployeesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.employee');

	function startTest() {
		$this->Employees =& new TestEmployeesController();
		$this->Employees->constructClasses();
	}

	function endTest() {
		unset($this->Employees);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
