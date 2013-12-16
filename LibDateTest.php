<?php

/**
 * LibDateTest - Unit test for LibDate. 
 * @author James Clayton <james.r.clayton@gmail.com>
 * @version 0.0.1
 * @copyright (c) 2013, James Clayton
 * @package LibDateTest
 * @license http://opensource.org/licenses/ISC ISC License (ISC)
 */

include_once('../LibEasyPHP/LibConfig.php');

$html->PrintLine('LibDateTest - Unit test for LibDate.', 'p');

$html->PrintLine('04-16-1981: ' . $date->Format('04-16-1981', 'yyyy-mm-dd'), 'p');

$html->PrintLine('04/16/1981: ' . $date->Format('04/16/1981', 'yyyy-mm-dd'), 'p');

$html->PrintLine('DateDiff: Start: 12/6/2013 5:30:00 PM Stop: 12/6/2013 6:18:00 PM ' . $date->DateDiff('12/6/2013 5:30:00 PM', '12/6/2013 6:18:00 PM', 'Minutes'))

?>