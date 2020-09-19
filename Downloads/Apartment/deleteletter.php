<?php
$user = "root";
$pass = "";
$db = "registration";
session_start();
$conn = new mysqli("localhost" , "root" , "12345" , "abc");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

				$lid = $_POST['lid'];
				$query="select * from letter where lid='$lid' ";
$result=mysqli_query($conn,$query); 
$count=mysqli_num_rows($result);	
if($count>0)
{
$query1="delete from letter where lid='$lid' ";
$result1=mysqli_query($conn,$query1);
header("location:letters.php");
}
else
{
	?>
<h1>DATA NOT REGISTERED!!</h1>

<?php
} 
?>