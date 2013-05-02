<?php
/* Group Fixture generated on: 2012-11-05 23:37:09 : 1352126229 */
class GroupFixture extends CakeTestFixture {
	var $name = 'Group';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'GroupName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'genre_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'Price' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'GroupName' => 'Lorem ipsum dolor sit amet',
			'genre_id' => 1,
			'Price' => 1
		),
	);
}
