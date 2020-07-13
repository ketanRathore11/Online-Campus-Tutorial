<?php

$servername = "localhost";
$username = "root";
$passwrd = "thenoobone";
$database = "oct";

// Creating connection
$conn = new mysqli($servername, $username, $passwrd,$database);
session_start();
// Check connection
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}


isset($_POST['login']);
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$result  = mysqli_query($conn, "SELECT * from student where email='".$_POST['email']."' and Password='".$_POST['pass']."' ");

	if(mysqli_fetch_assoc($result))
	{
		$_SESSION['$mail']=$email;
		//$_SESSION['mail']="test@gmail.com";
		//echo "Logged In";
		header("location:loginHome.php");
	}
	else{
		header("location:signin.html?Invalid = Please enter correct email and password");
	} 



$conn->close();
?>