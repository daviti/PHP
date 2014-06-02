<?php

$heads_up = 0;
$heads_down= 0;
for($i = 1; $i <= 5000; $i++)
{
	$coin = rand(1,2);
	if($coin == 1)
	{
		$heads_down++;
		$coin = "tails";
	}
	else
	{
		$heads_up++;
		$coin = "heads";
	}
echo "Attempt #{$i}: Throwing a coin... It's a {$coin}! ... Got {$heads_down} tail(s) so far and {$heads_up} head(s) so far<br>";
}

?>