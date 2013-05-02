<?php
/* Orders Test cases generated on: 2012-11-05 23:40:52 : 1352126452*/
App::import('Controller', 'Orders');

class TestOrdersController extends OrdersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OrdersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.order');

	function startTest() {
		$this->Orders =& new TestOrdersController();
		$this->Orders->constructClasses();
	}

	function endTest() {
		unset($this->Orders);
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
