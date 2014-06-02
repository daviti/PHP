
<?php

$sample = array(135, 222.4, 2.67, 1.23, 332, 2, 1.02);


function min_and_max($numbers)
{
	$min = $numbers[0];
	$max = $numbers[0];
	foreach($numbers as $number)
	{
		if($number > $max)
		{
			$max = $number;
		}
		if($number < $min)
		{
			$min = $number;
		}
	}
	return ["min" => $min, "max" => $max];
}

var_dump(min_and_max($sample));




?>