<?php
$user = "root";
$pass = "";
$db = "abc";
session_start();
$conn = new mysqli("localhost" , "root" , "12345" , "$db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

				$eno = $_POST['eno'];
				$query="select * from employee where eid='$eno' ";
$result=mysqli_query($conn,$query); 
$count=mysqli_num_rows($result);	
if($count>0)
{
$query1="delete from employee where eid='$eno' ";
$result1=mysqli_query($conn,$query1);
header("location:stackholder.php");
}
else
{
	?>
<h1>DATA NOT REGISTERED!!</h1>

<?php
} 
?>
