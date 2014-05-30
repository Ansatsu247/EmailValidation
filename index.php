<?php
session_start();
?>


<!doctype html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<title>Validation</title>
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

	?>
	<h3>Please enter your email address</h3>
	<form action="process.php" method="post">
		<input type = "hidden" name="action" value="register">
		<input type="text" name="email" placeholder="email address">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
<?php

$_SESSION = array();

?>
		
