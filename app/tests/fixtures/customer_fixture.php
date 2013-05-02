<?php
/* Customer Fixture generated on: 2012-11-05 22:32:50 : 1352122370 */
class CustomerFixture extends CakeTestFixture {
	var $name = 'Customer';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'Sei_Kanji' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Mei_Kanji' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Sei_Kana' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Mei_Kana' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LoginId' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LoginPwd' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Tel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'MailAddress' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'BirthDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '誕生日'),
		'YubinNo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '〒', 'charset' => 'utf8'),
		'Jyusyo' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'InsertDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'DeleteDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '退会日'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'Sei_Kanji' => 'Lorem ipsum dolor sit amet',
			'Mei_Kanji' => 'Lorem ipsum dolor sit amet',
			'Sei_Kana' => 'Lorem ipsum dolor sit amet',
			'Mei_Kana' => 'Lorem ipsum dolor sit amet',
			'LoginId' => 'Lorem ipsum dolor sit amet',
			'LoginPwd' => 'Lorem ipsum dolor sit amet',
			'Tel' => 'Lorem ipsum dolor sit amet',
			'MailAddress' => 'Lorem ipsum dolor sit amet',
			'BirthDate' => '2012-11-05 22:32:50',
			'YubinNo' => 'Lorem ip',
			'Jyusyo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'InsertDate' => '2012-11-05 22:32:50',
			'DeleteDate' => '2012-11-05 22:32:50'
		),
	);
}
