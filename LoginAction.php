<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
if (isset($_GET['submit'])){

	$username = $_GET['user'];
	$password = $_GET['password'];
	$f = fopen("Registration.txt","r");
	$data = fread($f,filesize("Registration.txt") );
	
$decode = json_decode($data,true);
$data_filter= explode(",", $decode);

	for ($i = 0; $i<count($data_filter);$i++){
		if($username==$data_filter[0] && $password==$data_filter[1] ){
$_SESSION['firstname']=$data_filter[2];
$_SESSION['lastname']=$data_filter[3];
$_SESSION['email']=$data_filter[5];
$_SESSION['user']=$data_filter[0];
}


	}
	echo $_SESSION['firstname'];
	echo "<br>";
echo $_SESSION['lastname'];
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
echo $_SESSION['user'];

};
?>
<form action="SessionDestroy.php" method="POST" >
	<input type="submit" value="Log out">
</form>
</body>
</html>