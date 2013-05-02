<?php
/* Order Fixture generated on: 2012-11-05 23:40:32 : 1352126432 */
class OrderFixture extends CakeTestFixture {
	var $name = 'Order';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '顧客ID。gaibuki-'),
		'KounyuDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '購入日'),
		'OtodokeYoteiDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'Bikou' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'KounyuDate' => '2012-11-05 23:40:32',
			'OtodokeYoteiDate' => '2012-11-05 23:40:32',
			'Bikou' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
