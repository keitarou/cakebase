<?php
/* Genres Test cases generated on: 2012-11-05 23:36:13 : 1352126173*/
App::import('Controller', 'Genres');

class TestGenresController extends GenresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GenresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.genre');

	function startTest() {
		$this->Genres =& new TestGenresController();
		$this->Genres->constructClasses();
	}

	function endTest() {
		unset($this->Genres);
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
