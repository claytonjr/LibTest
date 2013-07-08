<?php

/**
 * LibFileSystemTest - Unit test for LibFileSystem. 
 * @author James Clayton <james.r.clayton@gmail.com>
 * @version 0.0.1
 * @copyright (c) 2013, James Clayton
 * @package LibFileSystemTest
 * @license http://opensource.org/licenses/ISC ISC License (ISC)
 */

include_once('../LibEasyPHP/LibConfig.php');

$html->PrintLine('LibFileSystemTest - Unit test for LibFileSystem.', 'p');

$HelloWorldFile = 'C:/HelloWorld.txt';
$HelloWorldMessage = 'Blah blah blah!';

// if(!$fs->FileExists($HelloWorldFile)) {
// 	$fs->WriteDataToFile($HelloWorldFile, $HelloWorldMessage);
// }

// if($fs->FileExists($HelloWorldFile)) {
// 	$NewHelloWorldFile = $fs->ReadFileIntoString($HelloWorldFile);
// 	$html->PrintLine($NewHelloWorldFile, 'p');
// 	$html->PrintLine('File was successfully written, and read!', 'p');
// } else {
// 	$html->PrintLine('File was not successfully written and/or read!', 'p');
// }

if($fs->FileExists($HelloWorldFile)) {
	$html->PrintLine('The file does exist: ' . $HelloWorldFile, 'p');
} elseif(!$fs->FileExists($HelloWorldFile)) {
	$html->PrintLine('The file does not exist: ' . $HelloWorldFile, 'p');
	$fs->WriteDataToFile($HelloWorldFile, $HelloWorldMessage);
	if($fs->FileExists($HelloWorldFile)) {
		$html->PrintLine('Originally, this file did not exist. But, it was written: ' . $HelloWorldFile, 'p');
	} else {
		$html->PrintLine('This file does not exist. Even after I attempted to write: ' . $HelloWorldFile, 'p');
	}
} else {
	$html->PrintLine('Else. Undecided!', 'p');
}

if($fs->FileExists($HelloWorldFile)) {
	$ReadFile = $fs->ReadFileIntoString($HelloWorldFile);
	$html->PrintLine('Attempting to read file: ' . $ReadFile, 'p');
}

?>