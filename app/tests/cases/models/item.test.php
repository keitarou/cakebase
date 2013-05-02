<?php
/* Item Test cases generated on: 2012-11-05 23:38:35 : 1352126315*/
App::import('Model', 'Item');

class ItemTestCase extends CakeTestCase {
	var $fixtures = array('app.item');

	function startTest() {
		$this->Item =& ClassRegistry::init('Item');
	}

	function endTest() {
		unset($this->Item);
		ClassRegistry::flush();
	}

}
