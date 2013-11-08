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
$HelloWorldMessage = ('This file was written on: ' . $date->Today('Long'));

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

$html->PrintLine('Word count: ' . $str->WordCount($ReadFile), 'p');

$html->PrintLine('Character count: ' . $str->CharacterCount($ReadFile), 'p');

$html->PrintLine('Rot13: ' . $str->Rot13($ReadFile), 'p');

$html->PrintLine('String shuffle: ' . $str->Shuffle($ReadFile), 'p');

$html->PrintLine('String replace: ' . $str->Replace(array('file', 'written'), array('butt', 'farted'), $ReadFile), 'p');

?>