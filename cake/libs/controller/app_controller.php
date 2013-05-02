<?php
class AppController extends Controller {

	// CakeLibrary Import
	// @Security, @Session
	var $components = array('Security', "Session");

	// @array
	public $USER;
	// @id
	public $USER_ID;
	// @string
	public $USER_AUTH;
	// @string
	public $NOW;
	// @array
	public $ACCESS_DENY_LIST;

	function beforeFilter(){

		// Vender Library Import
		App::import('Vendor', 'phpconsole');
		PhpConsole::start(true, true, dirname(__FILE__));
		// test code ↓
		PhpConsole::debug('Hello Chrome Console', 'info');

		$this->USER             = null;
		$this->USER_ID          = null;
		$this->USER_AUTH        = null;
		// $this->USER_AUTH        = "user";
		$this->NOW              = date('Y-m-d H:i:s');
		$this->ACCESS_DENY_LIST = null;

		// Basic Attestation
		$this->Security->loginOptions = array('type'=>'basic');
		$this->Security->loginUsers = array('user'=>'pass');
		$this->Security->requireLogin('*');

		// Get Login Session
		$this->USER_ID = $this->Session->read('user.id');

		// Check Access List
		Configure::load("access");
		$this->ACCESS_DENY_LIST = Configure::read("DENY");
		$this->redirectAccessList($this->name, $this->action, $this->USER_AUTH);

	}

	/*
		if session["user_id"] is blank?
		redirect to login 
	*/
	function redirectLogin(){
		if(!$this->USER_ID){
			$this->redirect(array('controller' => 'tests', 'action' => 'login'));
		}
		return false;
	}

	/*
		is accesslist deny?
		redirect to deny page

		params
			name,
			action,
			role
		return
			false 
	*/
	function redirectAccessList($name, $action, $role){
		if(!empty($this->ACCESS_DENY_LIST[$name][$action])){
			if(in_array($role, $this->ACCESS_DENY_LIST[$name][$action])){
				echo "<h1 style='color:#ff0000'>error:権限エラー</h1>";
				exit;
			}
		}
		return false;
	}

	function setUser($id){
		return false;
	}

	function setUserAuth($auth){
		return false;
	}

	/*
		this function is alias
	*/
	function NOW(){
		return $this->NOW;
	}
}
