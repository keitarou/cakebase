<?php
/* Order Test cases generated on: 2012-11-05 23:40:32 : 1352126432*/
App::import('Model', 'Order');

class OrderTestCase extends CakeTestCase {
	var $fixtures = array('app.order');

	function startTest() {
		$this->Order =& ClassRegistry::init('Order');
	}

	function endTest() {
		unset($this->Order);
		ClassRegistry::flush();
	}

}
