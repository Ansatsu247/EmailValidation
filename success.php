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
		echo "The email address you entered ". "'".$_GET['email']."'"." is a VALID email address! Thank you!";
	?>
</body>
</html>
<?php

$_SESSION = array();

?>
	