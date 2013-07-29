<?php

/**
 * LibFinancialTest - A test file for LibFinancial. 
 * @author James Clayton <james.r.clayton@gmail.com>
 * @version 0.0.1
 * @copyright (c) 2013, James Clayton
 * @package LibFinancial
 * @license http://opensource.org/licenses/ISC ISC License (ISC)
 */

include_once('../LibEasyPHP/LibConfig.php');

$fin = new Financial();
$util = new Utility();
$dm = new DataManipulation();
$fs = new FileSystem();

$Pv = $fin -> PresentValue(0.05, 10, 10000);
$util ->PrintLine($Pv, 'p');

?>
