<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chekcerboard</title>
	<style>
		
	</style>
</head>
<table border="1" width="200" height="200">
<?php  
for($i=0;$i<8;$i++){ 
	echo '<tr>'; 
	for($j=0;$j<8;$j++){ 
		$c = ($i+$j)%2 ? 'red' : 'black'; 
		echo '<td bgcolor="'.$c.'"/>'; 
	} 
	echo '</tr>'; 
} 
?> 
	</table>
	</tbody>
	</table>
</body>
</html>