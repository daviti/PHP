<?php
function multiply($array, $multiplier)
{
	for($i = 0; $i < count($array); $i++)
	{
		if(is_numeric($array[$i]))
		{
			$array[$i] *= $multiplier;
		}
	}

	return $array;
}

$a = array(2, 4, 10, 16);
$a = multiply($a, 5);  
var_dump($a);
?>














