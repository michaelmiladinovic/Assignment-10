<?php
$db = mysqli_connect('localhost', 'root', '', 'donation');

if (isset($_POST['user_type'])) 
{
	$user_type = e($_POST['user_type']);
	$query = "INSERT INTO users (username, email, password) 
			  VALUES('$username', '$email', '$password')";
	mysqli_query($db);
	$_SESSION['success']  = "New user successfully created!!";
	header('location: home.php');
}
else
{
	$query = "INSERT INTO users (username, email, password) 
			  VALUES('$username', '$email', '$password')";
	mysqli_query($db);
}
?>