<?php

$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
foreach($x as $value)
{
	if(is_numeric($value))
	{
		echo str_repeat('*', $value);
		echo "<br>";
	}
	else
	{
		$letter = strtolower($value[0]);
		echo str_repeat($letter, strlen($value));
		echo "<br>";
	}
}

?>