<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>multiplication Table</title>
	<style>
		.color{
			background-color: lightgray;
		}
	</style>
</head>
<body>
<?php 

echo "<table border=3 width=10%>"; 
//create a for loop to create the head


for ($i =1; $i <= 9; $i++ ) 
{ 

	if(($i % 2) == 1) //Test to see if even, if it is we color the row
	{ 
		echo "<tr>"; 
	}
	else 
	{ 

		echo "<tr class='color'>"; 
	}	 

	echo "<th>".$i."</th>"; 

	for ( $j = 1; $j <= 9; $j++ ) { // inner loop 
		$result = $i * $j; //coloured squares 
		if ($result == $i*$j) { 
			echo "<td class='white'>" .$result. "</td>"; 

		}
		else{ 
			echo "<td>".$result."</td>"; 

		} 
	} 
	echo "</tr>"; 
}//ends outer for loops 

echo "</table>"; 

?> 
		
		</body>
</html>
​