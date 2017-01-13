<?php
App::uses('Syndicate', 'Model');

/**
 * Syndicate Test Case
 *
 */
class SyndicateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.syndicate',
		'app.employee',
		'app.cementery',
		'app.position'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Syndicate = ClassRegistry::init('Syndicate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Syndicate);

		parent::tearDown();
	}

}
