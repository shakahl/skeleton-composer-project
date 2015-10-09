<?php

namespace Example\TestCases;

/**
 * Composer library
 * Based on Example library (https://github.com/shakahl/skeleton-composer-project)
 *
 * Copyright (c) 2015 Soma Szélpál
 * Soma Szélpál, http://shakahl.com
 *
 * MIT Licensed
 * 
 * @author    Soma Szélpál <szelpalsoma@gmail.com>
 * @license   MIT Open Source License http://opensource.org/osi3.0/licenses/mit-license.php
 * @version @package-version@
 */

use Example\ExampleClass;
use PHPUnit_Framework_TestCase;

/**
 * 
 * @category  \Example\PHPUnitTestCases
 * @package   \Example\PHPUnitTestCases
 */
class ExampleClassTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Example test case
	 * 
	 * @return void
	 */
	public function testExampleLibraryFunction()
	{
		$obj = new ExampleClass(null);
		$className = get_class($obj);

		$this->assertEquals(ExampleClass::class, $className);
	}
}

