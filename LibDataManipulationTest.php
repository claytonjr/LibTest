<?php

/**
 * LibDataManipulationTest - Unit test for LibDatamanipulation. 
 * @author James Clayton <james.r.clayton@gmail.com>
 * @version 0.0.1
 * @copyright (c) 2013, James Clayton
 * @package LibDataManipulationTest
 * @license http://opensource.org/licenses/ISC ISC License (ISC)
 */

include_once('../LibEasyPHP/LibConfig.php');

class DataManipulationTest extends DataManipulation {

}

$html->PrintLine('LibDataManipulationTest - Unit test for LibDataManipulation.', 'p');

$EmptyString = '';
$NullVar = Null;
$HelloWorld = 'Hello, world!';

// if($dm->IsEmpty($EmptyString)) {
// 	$html->PrintLine('$EmptyString is empty!', 'p');
// } else {
// 	$html->PrintLine('$EmptyString is not empty!', 'p');
// }

// if($dm->IsEmpty($NullVar)) {
// 	$html->PrintLine('$NullVar is empty!', 'p');
// } else {
// 	$html->PrintLine('$NullVar is not empty!', 'p');
// }

// class Testing extends DataManipulation {
	//$dm = new DataManipulation();
	//$IsEmpty = $dm->IsEmpty();
	function TestEmpty($TestVar, $VarName) {
		//include_once('../LibEasyPHP/LibConfig.php');

		if($dm->IsEmpty($TestVar)) {
			$html->PrintLine('This var is empty: ' . $VarName, 'p');
		} else {
			$html->PrintLine('This var is not empty: ' . $VarName, 'p');
		}
	} 
// }

// $test = new Testing();
// $test->TestEmpty($EmptyString, '$EmptyString');
// $test->TestEmpty($NullVar, '$NullVar');
// $test->TestEmpty($HelloWorld, '$HelloWorld');

TestEmpty($EmptyString, 'EmptyString');
TestEmpty($NullVar, 'NullVar');
TestEmpty($HelloWorld, 'HelloWorld');

?>