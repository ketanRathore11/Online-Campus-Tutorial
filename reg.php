<?php 

$name     = $_POST['name'];
$enRoll   = $_POST['enRoll'];
$email    = $_POST['email'];
$password = $_POST['password'];
$branch   = $_POST['branch'];
$checkbox = $_POST['checkbox'];

$servername = "localhost";
$username = "root";
$passwrd = "thenoobone";
$database = "oct";

// Creating connection
$conn = new mysqli($servername, $username, $passwrd,$database);

	$msg ='';
	$msgClass ='';

// Check connection
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	$SELECT = "SELECT email from student Where email = ? Limit 1";
	$INSERT = "INSERT Into student(name, enRoll, email, password, branch) values(?, ?, ?, ?, ?)";

	//preparing statement 
	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt-> execute();
	$stmt-> bind_result($email);
	$stmt-> store_result();
	$rnum = $stmt->num_rows;

	if($rnum == 0){
		$stmt->close();

		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("sssss", $name, $enRoll, $email, $password, $branch);
		$stmt->execute();
		//echo("Register Successfull");
		$msg = 'Sign-up Successfull';
		$msgClass ='alert-success';
		require"signin.html";
	}else{
		echo("Someome already register using this email");
	}
	$stmt->close();
	$conn->close();
}
?>
