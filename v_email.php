<?php
session_start();

if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	foreach ($_POST as $name => $value) 
	{
		if(empty($value))
		{
			$_SESSION['error'][$name] = "sorry, " . $name . " cannot be blank";
		}
		else
		{
			switch ($name) {
				case 'first_name':
				case 'last_name':
					if(is_numeric($value))
					{
						$_SESSION['error'][$name] = $name . ' cannot contain numbers';
					}
				break;
				case 'email':
					if(!filter_var($value, FILTER_VALIDATE_EMAIL))
					{
						$_SESSION['error'][$name] = $name . ' not a valid email';
					}
				break;
				case 'password':
					{
						$_SESSION['error'][$name] = $name . ' must be greater than 5 characters ';
					}
				break;
				case 'birthdate':
					$birthdate = explode('/',$value);
					if(!checkdate($birthdate[0], $birthdate[1], $birthdate[2]))
					{
						$_SESSION['error'][$name] = $name . ' not a valid date ';
					}
				break;
			}
		}	
	}

	if(!isset($_SESSION['error']))
	{
		$_SESSION['success_message'] = "Yahooooooooo!";
	}
}

header('Location: validate_email.php');

?>
