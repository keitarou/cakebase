<?php
class TestsController extends AppController {

	var $name = 'Tests';
	var $autoLayout = false;

	public function index(){
		$this->redirectLogin();
		//$this->log("log test", LOG_DEBUG); 

		$this->autoLayout = true;
	}

	public function test(){
		$this->autoRender = false;
	}

	/*
	 @params 

	*/
	public function login(){
		// login exec
		if(isset($_POST["submit"])){
			// wirte session
			$this->Session->write('user.id', $_POST["user_id"]);

			// redirect page top
			$this->redirect(array('controller' => 'tests', 'action' => 'index'));
		}
		
		$this->autoLayout = true;
		$this->layout = "login";
	}

	public function add(){
		// Assignment
		$test     = null;
		$error    = null;
		$complete = null;
		
		$this->redirectLogin();
		// add exec
		if(isset($_POST["submit"])){
			$test = array(
				'name'		=> $_POST["name"],
				'password'	=> $_POST["password"],
				'auth'		=> $_POST["auth"],
				'delete_fg'	=> "0",
				'code'		=> $this->Test->setCode(),
				"created_at"=> DboSource::expression('NOW()'),
				"updated_at"=> DboSource::expression('NOW()')
			);

			// check calidations
			$this->Test->set($test);
			$error = $this->validateErrors($this->Test);
			// exec query
			if($this->Test->save($test)){
				$complete = $test;
				$test     = null;
			}else{

			}
		}

		//Assignment
		$this->set(compact('test'));
		$this->set(compact('error'));
		$this->set(compact('complete'));
	}

	public function edit(){
		$this->redirectLogin();

		// Assignment
		$test = null;

		// get params
		$params = null;
		if(isset($_GET)){
			foreach ($_GET as $key => $value) {
				$params[$key] = $value;
			}
		}
		if(isset($_POST)){
			foreach ($_POST as $key => $value) {
				$params[$key] = $value;
			}
		}

		// get test's record
		$conditions = array(
			"Test.id"        => $params["id"],
			"Test.delete_fg" => "0"
		);
		$test = $this->Test->find("first", array(
				"conditions" => $conditions
		));

		// no record
		if(empty($test["Test"]["id"])){

		}

		// update exec
		if(isset($_POST["submit"])){
			$test = $test["Test"];
			$test["name"]       = $params["name"];
			$test["password"]   = $params["password"];
			$test["auth"]       = $params["auth"];
			$test["updated_at"] = $this->NOW();
			if($this->Test->save($test)){
				echo "success";
			}else{
				echo "error";
			}
			$test = null;
			$this->autoRender = false;
		}

		// Assignment
		$this->set(compact('test'));
	}

	public function delete(){
		$this->redirectLogin();
		$this->autoRender = false;

		foreach ($_POST as $key => $value) {
			$params[$key] = $value;
		}

		// update exec
		if(isset($_POST["submit"])){
			// get test's record
			$conditions = array(
				"Test.id"        => $params["id"],
				"Test.delete_fg" => "0"
			);
			$test = $this->Test->find("first", array(
					"conditions" => $conditions
			));

			// delete record
			$test = $test["Test"];
			$test["delete_fg"] = "1";
			print_r($test);
			if($this->Test->save($test)){
				echo "success";
			}else{
				echo "error";
			}
		}
	}

	public function search(){
		$this->redirectLogin();
	}

	public function search_list(){
		$this->redirectLogin();

		$search = null;
		foreach ($_POST as $key => $value) {
			$search[$key] = $value;
		}

		// Assignment
		$search          = $search;
		$tests           = array();
		$tests_all_count = 0;
		$current_page    = $search["page"];
		$prev_page       = false;
		$next_page       = false;

		if(isset($search["submit"])){

			//create where
			$conditions = array();
			if($search["code"] != ""){
				$conditions[] = array("Test.code LIKE"     => "%{$search["code"]}%");
			}
			if($search["name"] != ""){
				$conditions[] = array("Test.name LIKE"     => "%{$search["name"]}%");
			}
			if($search["password"] != ""){
				$conditions[] = array("Test.password LIKE" => "%{$search["password"]}%");
			}
			if($search["auth"] != ""){
				$conditions[] = array("Test.auth LIKE"     => "%{$search["auth"]}%");
			}
			$conditions[] = array("Test.delete_fg"     => "0");

			//create order by
			$order      = array(
				"Test.code ASC"
			);

			//limit and offset
			$limit = 5;
			$page  = $search["page"];

			//query tests get record
			$tests = $this->Test->find("all", array(
					"conditions" => $conditions,
					"order"      => $order,
					"limit"      => $limit,
					"page"       => $page
			));

			// query get all count
			$tests_all_count = $this->Test->find("count", array(
					"conditions" => $conditions
			));

			// prev and next
			$prev_page = ($page > 1)? $page - 1: false;
			$next_page = ($tests_all_count > $page * $limit)? $page + 1: false;
		}

		// Assignment
		$this->set(compact('search'));
		$this->set(compact('tests'));
		$this->set(compact('tests_all_count'));
		$this->set(compact('current_page'));
		$this->set(compact('prev_page'));
		$this->set(compact('next_page'));
	}

}
