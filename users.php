<?php
$users['first_name'] = 'Michael';
$users['last_name'] = 'Choi';
$string = "There are " . count($users) . " keys in this array: ";
$second = "";
foreach ($users as $key => $value) 
{
$string .= $key . ", ";
	$second .= "<br>The value in the key " . $key . " is " . $value;
 }
$string = substr($string, 0, strlen($string) - 2);
 echo $string;
 echo $second;

?>



