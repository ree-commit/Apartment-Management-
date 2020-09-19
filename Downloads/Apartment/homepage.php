<?php  
error_reporting(E_ALL ^ E_NOTICE);
       $host = "localhost";
	$userName = "root";
	$password = "root";
	$dbName = "abc";
	// Create database connection
	$conn = new mysqli($host, $userName, $password, $dbName);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	echo $conn;
}
$email = $conn->real_escape_string($_POST['email']);
$Password = $conn->real_escape_string($_POST['psw']);
$sql="select * from login where email='".$email."' and password='".$Password."'";

$result = $conn->query($sql);
if ($result->num_rows > 0)
 {
 	//echo "<script> window.location.assign('Home.php'); </script>";
	header("Location: Uhome.php");
 }
 else
 {
	// $msg = 'Login Failed!<br /> Please make sure that you enter the correct  details and that you have activated your account.';
	echo 'login Failed';
 }

?>