<?php

$ja = [];
for ($i = 0; $i < 50; $i ++)
{
	$inner_array = [];
	for($j = 0; $j < 50; $j++)
	{
		$inner_array[] = $j;
	}
	array_push($ja[] = $inner_array [] = $j);

}

$leng = count($ja);
for(index = 0; $index < $length; $index += 1)
{
	$inner_length = count($ja[$index]);
	for($inner_index = 0; $inner_ndex < $iner_length; $inner_index ++)
	{
		echo$ja[$index][$index] . "<br>";
	}
}

?>