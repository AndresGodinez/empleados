<?php
/**
 * EmployeeFixture
 *
 */
class EmployeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'addres' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8mb4_general_ci', 'charset' => 'utf8mb4'),
		'cementery_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'position_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor ',
			'addres' => 'Lorem ipsum dolor sit amet',
			'telephone' => 'Lorem ip',
			'cementery_id' => 1,
			'position_id' => 1
		),
	);

}
