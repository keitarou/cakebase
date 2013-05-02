<?php
/* Item Fixture generated on: 2012-11-05 23:38:35 : 1352126315 */
class ItemFixture extends CakeTestFixture {
	var $name = 'Item';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ItemName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 400, 'collate' => 'utf8_general_ci', 'comment' => '商品名フルネーム', 'charset' => 'utf8'),
		'Size' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Unit' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '単位', 'charset' => 'utf8'),
		'Stock' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'InsertDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'DeleteDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'ItemName' => 'Lorem ipsum dolor sit amet',
			'Size' => 'Lorem ipsum dolor sit amet',
			'Unit' => 'Lorem ipsum dolor sit amet',
			'Stock' => 1,
			'InsertDate' => '2012-11-05 23:38:35',
			'DeleteDate' => '2012-11-05 23:38:35',
			'group_id' => 1
		),
	);
}
