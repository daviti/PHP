
​<html>​
	<head>​
		<title></title>​
		<link type="text/css" rel="stylesheet">​
		<style>​
			table, td {
				border: 1px solid black;
				padding: 10px;
			}
			table {
				border-collapse: collapse;
				margin: 50px;
			}
			h1 {
				margin: 50px;
			}
			table th {
				border: 1px solid black;
				font-size: 20px;
			}
		</style>​
	</head>​
	<body>​
		<h1>Multiplication Table</h1>​
		<table>​
			<thead>​
				<tr>​
​
				</tr>​
			</thead>​
			<tbody>​
​<?php			
		
​?>​
			</tbody>​
		</table>​
	</body>​
​</html>
<!DOCTYPE HTML>​
​<html>​
​<head>​
	<meta charset="UTF-8">​
	<title>Multiplication Table</title>​
	<link rel="stylesheet" type="text/css" href="style.css" />​
​</head>​
	<table>​
		<thead>​
​<?php​

​<?php​
			for($rows = 1; $rows < 10; $rows++)
			{
				if(is_int($rows / 2))
				{
					echo "<tr> <td class='emphiasized'>" . $rows . "</td>";
				}
				else​
				{
					echo "<tr class='highlighted'> <td class='emphasized'>" . $rows . "</td>";
				}
				
				for($columns = 1; $columns < 10; $columns++)
				{
					echo "<td>" . $columns * $rows . "</td>";
				}			
				echo "</tr>";
			} 
​?>​
		</tbody>​
	</table>​
​<body>​
​</body>



