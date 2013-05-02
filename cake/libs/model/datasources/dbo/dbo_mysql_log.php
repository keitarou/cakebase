<?php
App::import('Datasource', 'DboSource');
App::import('Datasource', 'DboMysql');
 
class DboMysqlLog extends DboMysql
{
	function execute($sql, $options = array()) {
		$defaults = array('log' => ($this->fullDebug || Configure::read('Sql.log')));
		$options = array_merge($defaults, $options);
 
		return parent::execute($sql, $options);
	}
 
 	// SQL LOG OUT PUSH
	function logQuery($sql) {
		$return = parent::logQuery($sql);
 
		if (Configure::read('Sql.log')) {
			$data = date('Y-m-d');
			$this->log($sql, 'sql/'.$data);
		}
 
		return $return;
	}
}
