<?php
class Test extends AppModel {
	var $name = 'Test';
	var $code_format = "Axxxxxx";
	var $validate = array(
		'code' => array(
			'rule' => array('between', 7, 7),
			'message' => 'Code Length 7'
		),
		'name' => array(
			'rule' => array('between', 1, 10),
			'message' => 'name Length Min 1 Max 10'
		),
		'password' => array(
			'rule' => array('between', 4, 8),
			'message' => 'Password Length Min 4 Max 8'
		),
	);
	/*
		Return Auto Number

		@params null
		@return string
	*/
	public function setCode(){
		$number_length = strlen($this->code_format) - 1;
		$char = preg_replace('/x/', '', $this->code_format);

		// select mac code
		$conditions = array("Test.code LIKE" => "$char%");
		$order      = array("Test.code DESC");
		$row = $this->find("first",
			array(
					"conditions" => $conditions,
					"order"      => $order,
				)
		);
		$code = isset($row["Test"]["code"])? $row["Test"]["code"]: false; 

		// number increment
		$number = preg_replace("/{$char}/", '', $code);
		$number = (int)$number;
		$number++;

		// merge char and number
		$code =     $char. 
			        sprintf('%0'.$number_length.'d', $number);

		return $code;
	}


}
