<?php
/* Orderdetail Test cases generated on: 2012-11-05 23:39:44 : 1352126384*/
App::import('Model', 'Orderdetail');

class OrderdetailTestCase extends CakeTestCase {
	var $fixtures = array('app.orderdetail');

	function startTest() {
		$this->Orderdetail =& ClassRegistry::init('Orderdetail');
	}

	function endTest() {
		unset($this->Orderdetail);
		ClassRegistry::flush();
	}

}
