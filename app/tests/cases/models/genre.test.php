<?php
/* Genre Test cases generated on: 2012-11-05 23:33:03 : 1352125983*/
App::import('Model', 'Genre');

class GenreTestCase extends CakeTestCase {
	var $fixtures = array('app.genre');

	function startTest() {
		$this->Genre =& ClassRegistry::init('Genre');
	}

	function endTest() {
		unset($this->Genre);
		ClassRegistry::flush();
	}

}
