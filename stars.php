<?php

$x = array(4, 6, 1, 3, 5, 7, 25);;
foreach($x as $value)
{
	if($value)
	{
		echo str_repeat('*', $value);
		echo "<br>";
	}
	
}

?>