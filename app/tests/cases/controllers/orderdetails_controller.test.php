<?php
/* Orderdetails Test cases generated on: 2012-11-05 23:40:01 : 1352126401*/
App::import('Controller', 'Orderdetails');

class TestOrderdetailsController extends OrderdetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OrderdetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.orderdetail');

	function startTest() {
		$this->Orderdetails =& new TestOrderdetailsController();
		$this->Orderdetails->constructClasses();
	}

	function endTest() {
		unset($this->Orderdetails);
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
