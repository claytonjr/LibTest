<?php

/**
 * LibHealthTest - Unit test for LibCrypto. 
 * @author James Clayton <james.r.clayton@gmail.com>
 * @version 0.0.1
 * @copyright (c) 2013, James Clayton
 * @package LibHealthTest
 * @license http://opensource.org/licenses/ISC ISC License (ISC)
 */

include_once('../LibEasyPHP/LibConfig.php');

$html->PrintLine('Your current version of PHP is ' . $util->PhpVersion(), 'p');

$html->PrintLine('LibHealthTest - Unit test for LibHeath.', 'p');

$html->PrintLine('Metrics of the human body:', 'p');

$Bust = 41;
$Waist = 29;
$Hips = 42;
$Height = 65;
$Weight = 155;
$Whr = $math->Round($heal->WaistHipRatio($Waist, $Hips));
$Bwr = $math->Round($heal->BustWaistRatio($Bust, $Waist));
$Bmi = $math->Round($heal->Bmi($Height, $Weight));

$html->PrintLine('My current BMI is: ' . $Bmi, 'br');
$html->PrintLine('My current status is: ' . $str->LCase($heal->BmiStatus($Bmi)), 'br');
$html->PrintLine('The waist-hip-ratio is: ' . $Whr, 'br');
$html->PrintLine('The bust-waist-ratio is: ' . $Bwr, 'br');

$html->PrintLine('Burning Calories:', 'p');

$int_time = 0;
while($int_time <= 360) {
	$html->PrintLine('After ' . $int_time . ' minutes of walking, calories burned: ' . $math->Round($heal->CaloriesBurned('M', 32, 155, 150, $int_time)), 'br');
	$int_time = $int_time + 30;
}

$html->PrintLine('Here is a temp Ed section:', 'p');

$TobyX = 5;
$TobyY = 4;
$LaSalleX = 4;
$LaSalleY = 1;
$html->PrintLine('Toby is 5,4 and LaSalle is 4,1. Their rating: ' . $math->Round(1 / (1 + $math->SqRt(($math->Pow($TobyX - $LaSalleX, 2) + $math->Pow($TobyY - $LaSalleY, 2))))), 'br');
$html->PrintLine('Ed score for Toby and LaSalle is: ' . $math->Round($math->Ed($TobyX, $LaSalleX, $TobyY, $LaSalleY), 2), 'br');

?>