<?php
/**
 * Japanese Localized Validation class test case
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org
 * @package       localized
 * @subpackage    localized.tests.cases.libs
 * @since         Localized Plugin v 0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::import('Lib', 'Localized.JpValidation');

/**
 * JpValidationTestCase
 *
 * @package       localization
 * @subpackage    localized.tests.cases.libs
 */
class JpValidationTestCase extends CakeTestCase {

/**
 * test the phone method of JpValidation
 *
 * @return void
 * @access public
 */
	function testPhone() {
		$this->assertTrue(JpValidation::phone('03-1111-2222'));
		$this->assertTrue(JpValidation::phone('090-1111-2222'));
		$this->assertTrue(JpValidation::phone('0111-11-2222'));
		$this->assertTrue(JpValidation::phone('02222-1-1111'));
		$this->assertTrue(JpValidation::phone('0311112222'));
		$this->assertTrue(JpValidation::phone('09011112222'));
		$this->assertTrue(JpValidation::phone('03 1111 2222'));
		$this->assertTrue(JpValidation::phone('090 1111 2222'));
		$this->assertTrue(JpValidation::phone('+81 90 1111 2222'));
		$this->assertTrue(JpValidation::phone('+81-90-1111-2222'));
		$this->assertTrue(JpValidation::phone('+819011112222'));

		$this->assertFalse(JpValidation::phone('051238-1-111'));
		$this->assertFalse(JpValidation::phone('90-1111-2222'));
		$this->assertFalse(JpValidation::phone('+8190111122221199'));
		$this->assertFalse(JpValidation::phone('+8111-90-1111-2222'));
		$this->assertFalse(JpValidation::phone('056'));
	}


/**
 * test the postal method of JpValidation
 *
 * @return void
 * @access public
 */
	function testPostal() {
		$this->assertTrue(JpValidation::postal('020-5045'));
		$this->assertFalse(JpValidation::postal('0205-504'));
	}
}
