<?php
/**
 * UserAddress Fixture
 */
class UserAddressFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'user_id' => array('type' => 'text', 'null' => false, 'length' => 11),
		'address' => array('type' => 'string', 'null' => false),
		'address2' => array('type' => 'string', 'null' => false),
		'city' => array('type' => 'string', 'null' => false),
		'state' => array('type' => 'string', 'null' => false),
		'postal_code' => array('type' => 'string', 'null' => false, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => false),
		'modified' => array('type' => 'datetime', 'null' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'address' => 'Lorem ipsum dolor sit amet',
			'address2' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'postal_code' => 'Lorem ip',
			'created' => '2021-07-25 12:53:37',
			'modified' => '2021-07-25 12:53:37'
		),
	);

}
