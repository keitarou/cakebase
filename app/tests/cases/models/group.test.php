<?php
/* Group Test cases generated on: 2012-11-05 23:37:09 : 1352126229*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
