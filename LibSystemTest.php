<?php

/**
 * LibSystemTest - Unit test for LibSystem. 
 * @author James Clayton <james.r.clayton@gmail.com>
 * @version 0.0.1
 * @copyright (c) 2013, James Clayton
 * @package LibSystemTest
 * @license http://opensource.org/licenses/ISC ISC License (ISC)
 */

include_once('../LibEasyPHP/LibConfig.php');

$html->PrintLine('LibSystemTest - Unit test for LibSystem.', 'p');

$html->PrintLine('The following line should be blank.', 'br');
$sys->Execute('cd', False);

$html->PrintLine('The following line should be present.', 'br');
$sys->Execute('cd', True);

?>