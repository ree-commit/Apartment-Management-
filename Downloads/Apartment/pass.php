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
    
$Pass = $conn->real_escape_string($_GET['pass']);
//$email = $_GET['email'];
$sql="INSERT INTO login (email,password) VALUES ('reenaoswal404@gmail.com','".$Pass."')";
if(!$result = $conn->query($sql)){
//die('There was an error running the query [' . $conn->error . ']');
echo  ' success';
}
else
{ 
	echo "<center><div align='center' style='width: 500px;height:300px; border: solid 2px green;''>
      <h1>'Password Set Successfull'</h1><p style='color:green;''> </p>
      <form name='frm' method='get' action='login.php'>
	<button name='submit' type='submit' style='width:80px;height: 30px;  background-color: blue;''>OK Login NOW</button></form></div></center> ";
}
 
?>