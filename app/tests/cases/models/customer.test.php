<?php
/* Customer Test cases generated on: 2012-11-05 22:32:50 : 1352122370*/
App::import('Model', 'Customer');

class CustomerTestCase extends CakeTestCase {
	var $fixtures = array('app.customer');

	function startTest() {
		$this->Customer =& ClassRegistry::init('Customer');
	}

	function endTest() {
		unset($this->Customer);
		ClassRegistry::flush();
	}

}
