<?php

/**
 * LibStringTest - Unit test for LibString
 * @author James Clayton <james.r.clayton@gmail.com>
 * @version 0.0.1
 * @copyright (c) 2013, James Clayton
 * @package LibStringTest
 * @license http://opensource.org/licenses/ISC ISC License (ISC)
 */

include_once('../LibEasyPHP/LibConfig.php');

$HelloWorld = 'Hello, world!';
$Hello = 'Hello';
$World = 'World';

$html->PrintLine('HelloWorld is ' . $HelloWorld, 'p');
$html->PrintLine($str->InStr($HelloWorld, $Hello), 'p');
$html->PrintLine($str->InStr($HelloWorld, $World, 0, 'R'), 'p');
$html->PrintLine($util->PhpVersion(), 'p');

?>