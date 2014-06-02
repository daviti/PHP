<!DOCTYPE HTML>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title> table border</table>
<style>
	.color{
			background-color: black;
			color: white;
		}
		</style>
	</head>
<body>​
<?php​
	$users = array(
		array('first_name' => 'Michael', 'last_name' => 'Choi')
		array('first_name' => 'John', 'last_name' => 'Supsupin'),
		array('first_name' => 'Mark','last_name' => 'Guillen'),
		array('first_name' => 'KB','last_name' => 'Tonel'),   	
		array('first_name' => 'Ian','last_name' => 'Dahlberg'),
		array('first_name' => 'Joe','last_name' => 'Schmoe'),
		array('first_name' => 'Ludwig','last_name' => 'Beethoven'),
		array('first_name' => 'Gustav','last_name' => 'Mahler'),
		array('first_name' => 'Pete','last_name' => 'Tchaikovsky'),
		array('first_name' => 'Allan', 'last_name' => 'Vogel'),
		array('first_name' => 'John', 'last_name' => 'Doe'),
		array('first_name' => 'Norman','last_name' => 'Mailer'),
		array('first_name' => 'Igor','last_name' => 'Stravinsky'),
		array('first_name' => 'Edgar','last_name' => 'Poe')
			);
​?>​
		<table>​
			<thead>​
				<tr>​
					<th>User #</th>​
					<th>First Name</th>​
					<th>Last Name</th>​
					<th>Full Name</th>​
					<th>Full Name in upper case</th>​
					<th>Length of name</th>​
				</tr>​
			</thead>​
			<tbody>​
​	<?php	

				$count = count($users);
				for($i = 0; $i < $count; $i++)
			{
				$user = $users[$i];
				$counter = $i + 1;
				$full_name = trim($user['first_name']) . " " . trim($user['last_name']);

				if($counter % 5 == 0)
				{
					echo "<tr class='color'>";
				}
				else
				{
					echo "<tr>";
				}
					echo "<td>{$counter}</td>";
					echo "<td>".$full_name."</td>";
					echo "<td>".$name_uppercase."</td>";
					echo "<td>".$name_length."</td>";
​					echo "<td>";$full_name . "</td></tr>";
				
					
​
				}
​		?>​
			</tbody>​
		</table>​
	</body>​
​</html>
