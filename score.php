<?php
for($i=0; $i<100; $i++)
{
	$score = rand(50,100);
	if($score < 70)
	{
		echo "<h1>Your score is: " . $score . "</h1>";
		echo "<h2>Your grade is a D</h2>";
	}
	else if($score < 80)
	{
		echo "<h1>Your score is: " . $score . "</h1>";
		echo "<h2>Your grade is a C</h2>";
	}
	else if($score < 90)
	{
		echo "<h1>Your score is: " . $score . "</h1>";
		echo "<h2>Your grade is a B</h2>";
	}
	else
	{
		echo "<h1>Your score is: " . $score . "</h1>";
		echo "<h2>Your grade is a A</h2>";
	}
}
?>
