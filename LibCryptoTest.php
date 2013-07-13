<?php

/**
 * LibCryptoTest - Unit test for LibCrypto. 
 * @author James Clayton <james.r.clayton@gmail.com>
 * @version 0.0.1
 * @copyright (c) 2013, James Clayton
 * @package LibCryptoTest
 * @license http://opensource.org/licenses/ISC ISC License (ISC)
 */

include_once('../LibEasyPHP/LibConfig.php');

$html->PrintLine('LibCryptoTest - Unit test for LibCrypto.', 'p');

$html->PrintLine('Listing of available algorithms: ' . $cr->ShowAlgorithms());

print_r($cr->ShowAlgorithms());

?>
