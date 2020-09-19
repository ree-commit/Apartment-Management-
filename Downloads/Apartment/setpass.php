<?php  
error_reporting(E_ALL ^ E_NOTICE);
       $host = "localhost";
	$userName = "root";
	$password = "12345";
	$dbName = "abc";
	// Create database connection
	$conn = new mysqli($host, $userName, $password, $dbName);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	echo $conn;
   }
   $email = $_GET['email'];
    echo "<center><div align='center' style='width: 500px;height:300px; border: solid 2px green;''>
      <h1>Set Password</h1><p style='color:green;''> </p>
      <form name='frm' method='get' action='pass.php'>
      <input type='text' name='email' value='$email' style='display:none;' >
<input type='password' name='pass' placeholder='Enter Password' style='width: 200px;height: 40px; font-size: 16px' maxlength='30' minlength='4' required> <br/><br/>
<button name='submit' type='submit' style='width:80px;height: 30px;  background-color: blue;''>Submit</button></form></div></center> ";


 
?>

