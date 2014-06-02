<?php
$y=array(1, 2, 5);
$sum=0;
$counter = 0;

my_loop:
if (isset($y[$counter]))
{
	$sum = $sum + $y[$counter];
	$counter= $counter + 1;
	goto my_loop;
}

echo $sum;

echo "<p>Now we'll use a for loop!<p>";

$sum = 0;

for($counter=0; isset($y[$counter]); $counter++)
//for($counter=0; $counter < count($y); $counter++)
{
	// echo $a[$counter] . " ";
	$sum = $sum + $y[$counter];
}

echo $sum;

?>