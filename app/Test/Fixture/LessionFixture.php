<?php
/**
 * LessionFixture
 *
 */
class LessionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'course_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'course_class_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'duration' => array('type' => 'integer', 'null' => false, 'default' => null),
		'token' => array('type' => 'integer', 'null' => false, 'default' => null),
		'hall_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'tutor_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'time' => '2013-06-01 22:21:45',
			'course_id' => 1,
			'course_class_id' => 1,
			'duration' => 1,
			'token' => 1,
			'hall_id' => 1,
			'tutor_id' => 1
		),
	);

}
