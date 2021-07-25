<?php
App::uses('ProductsSale', 'Model');

/**
 * ProductsSale Test Case
 */
class ProductsSaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.products_sale',
		'app.product',
		'app.category',
		'app.sale',
		'app.tag',
		'app.products_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductsSale = ClassRegistry::init('ProductsSale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductsSale);

		parent::tearDown();
	}

}
