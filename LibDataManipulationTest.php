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

$html->PrintLine('LibDataManipulationTest - Unit test for LibDataManipulation.', 'p');

$EmptyString = '';
$NullVar = Null;
$HelloWorld = 'Hello, world!';

$Algos = $cr->ShowAlgorithms();
$html->PrintLine($Algos);

$Family = array (
	'James Clayton' => 'Father',
	'Courtney Clayton' => 'Mother', 
	'Jackson Clayton' => 'Child',
	'Max Schoenfeld' => 'Child',
	'Annie Sly' => 'Child'
);

$Family1 = $Family;
$Family2 = $Family;

// $SortedAlgos = $dm->SortArray($Family, 'Key', 'Ascending');
// $SortedFamily = ksort($Family);
// $html->PrintLine($Family, 'br');

// $html->PrintLine($Family);
// $html->PrintLine($dm->SortArray($Family, 'Key', 'Ascending'));
// $html->PrintLine($dm->SortArray($Family, 'Key', 'Descending'));
// $html->PrintLine($dm->SortArray($Family, 'Value', 'Ascending'));
// $html->PrintLine($dm->SortArray($Family, 'Value', 'Descending'));

// $dm->SortArrayByKey($Family, 'Ascending');
// $html->PrintLine('Family is SortArrayByKey, Ascending');
// $html->PrintLine($Family);

// $dm->SortArrayByKey($Family1, 'Descending');
// $html->PrintLine('Family1 is SortArrayByKey, Descending');
// $html->PrintLine($Family1)

// $html->PrintLine((string) $dm->SortArrayByKey($Family, 'Ascending'), 'p');

$dm->SortArrayByKey($Family, 'Descending');

var_dump($dm->SortArrayByKey($Family, 'Ascending'));	

if(is_array($Family)) {
	$html->PrintLine('Family is an array!', 'p');
	$html->PrintLine($Family);
	var_dump($Family);
} else {
	$html->PrintLine('Family is not an array!', 'p');
	var_dump($Family);
}

?>