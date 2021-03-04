<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php


$_SESSION['firstname'];
$_SESSION['lastname'];
$_SESSION['email'];
$_SESSION['user'];
	session_destroy();
	header("location:Registration.html");
?>
</body>
</html>