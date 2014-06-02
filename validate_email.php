<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validate email</title>
</head>
<body>
	<?php
	if(isset($_SESSION['error']))
	{
		foreach($_SESSION['error'] as $name => $message)
		{
			?>
			<p><?=$message ?></p>
			<?php
		}
	}
	elseif(isset($_SESSION['success_message']))
	{
		?>
		<p><?=$_SESSION['success_message'] ?></p>
		<?php
	}
	?>
	<form action="v_email.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="action" value="register">
		<input type="text" name="first_name" placeholder="Enter First Name">
		<input type="text" name="last_name" placeholder="Enter Last Name">
		<input type="text" name="email" placeholder="Enter Email">
		<input type="password" name="password" placeholder="Password">
		<input type="text" name="birthdate" placeholder="Enter birthday MM/DD/YYYY">
		<input type="file" name="file">
		<input type="submit" value="Register">
	</form>
</body>
</html>
