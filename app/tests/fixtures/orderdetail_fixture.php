<?php
/* Orderdetail Fixture generated on: 2012-11-05 23:39:44 : 1352126384 */
class OrderdetailFixture extends CakeTestFixture {
	var $name = 'Orderdetail';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'order_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'item_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'OrderNum' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'order_id' => 1,
			'item_id' => 1,
			'OrderNum' => 1
		),
	);
}
