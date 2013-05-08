<?php
/**
* クラスの説明
*
* @package Test
* @author keitarou
* @since 2013/05/07
* @version 0.0.1
*/
class Test extends AppModel {
	/**
	   @var string モデル名
	*/
	var $name = 'Test';
	/**
		@var string コードのフォーマット
	*/
	var $code_format = "Axxxxxx";
	/**
		@var array バリデーション
	*/
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
	
	/**
		 コードを自動裁判した結果を返す。
		
		 @return string 自動採番されたコード
	*/
	public function setCode(){
		$number_length = strlen($this->code_format) - 1;
		$char = preg_replace('/x/', '', $this->code_format);

		// select mac code
		$conditions = array("code LIKE" => "$char%");
		$order      = array("code DESC");
		$row = $this->find("first",
			array(
					"conditions" => $conditions,
					"order"      => $order,
				)
		);
		$code = isset($row[$this->name]["code"])? $row[$this->name]["code"]: false; 

		// number increment
		$number = preg_replace("/{$char}/", '', $code);
		$number = (int)$number;
		$number++;

		// merge char and number
		$code =     $char. 
			        sprintf('%0'.$number_length.'d', $number);

		return $code;
	}

	/**
		 重複したカラムの値を持つレコードがあるかチェックする
		
		 @param array     $coulmns    カラム名 => 値
		 @param integer   $id         レコードのid (なくてもOKだけど更新処理とかには必須)
		 @return array カラム名 => "メッセージ"
	*/
	public function chechUnique($coulmns, $id=false){
		$error_message = false;

		foreach ($coulmns as $key => $value) {
			$conditions = array(
				$key        => $value,
				"delete_fg" => '0'
			);
			// レコードIDが与えられている場合は、そのIDのレコードは含まない
			if($id){
				$conditions[] = array("id !=" => $id);
			}

			$count = $this->find("count",
				array(
						"conditions" => $conditions,
					)
			);
			if($count > 0){
				$error_message[$key] = "{$value} は登録済です。";
			}
		}

		return $error_message;
	}

}
