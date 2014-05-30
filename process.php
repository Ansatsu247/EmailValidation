<?php

session_start();

if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	foreach ($_POST as $name => $value)
	{
		if(empty($value))
		{
			$_SESSION['error'][$name] = "The email address you entered cannot be empty!";
		}
		else
		{
			switch ($name) 
			{
				case 'email':
					if(!filter_var($value, FILTER_VALIDATE_EMAIL))
					{
						$_SESSION['error'][$name] = "The email address you entered ". "'".$value."'"." is NOT a valid email address!";
					}
				break;
			}
		}
	}

}

	
if (isset($_SESSION['error']))
{
	header('Location: index.php');
}
else {
	header("Location: success.php?email=$_POST[email]");
}

?>

