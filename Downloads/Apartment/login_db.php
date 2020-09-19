 <?php
 session_start();
$uname=trim($_SESSION["email"]);
$password=trim($_SESSION["password"]);
// Create connection
$conn = new mysqli('localhost', 'root', '12345', 'abc');
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login WHERE email='$uname' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 {
 	while($row = $result->fetch_assoc())
       {
	$_SESSION['email']=$row['email'];
	$email=$_SESSION['email'];
	$_SESSION['utype']=$row['utype'];
	$utype=$_SESSION['utype'];
		}
		if($utype=="president")
		{
			   header('location:president.php')  ;
		}
		else if($utype=="user")
		{
			   header('location:Userh.php')  ;
		}
		else if($utype=="treasurer")
		{
			   header('location:treasurer.php')  ;
		}
		else if($utype=="bearer")
		{
			   header('location:bearer.php')  ;
		}
		else if($utype=="secretary")
		{
			   header('location:secretary.php')  ;
		}
		else{
			echo "invalid username";
		}

	echo $_SESSION['email'] ;
	echo $_SESSION['dno'] ;
 }
 else {
 	echo "<center><h3>Record not found</h3><a href='login.php'>go Back</a><cente>";
}
//$conn->close();
?> 