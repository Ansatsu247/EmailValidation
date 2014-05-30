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
		//var_dump($_SESSION);
		echo "The email address you entered ". "'".$_SESSION['success']['email']
		."'"." is a VALID email address! Thank you!";
	?>
</body>
</html>
<?php

session_destroy();

?>
	