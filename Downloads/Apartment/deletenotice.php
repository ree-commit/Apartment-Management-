<?php
$user = "root";
$pass = "";
$db = "computinglab";
session_start();
$conn = new mysqli("localhost" , "root" , "12345" , "abc");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

				$nid = $_POST['nid'];
				$query="select * from notice where nid='$nid' ";
$result=mysqli_query($conn,$query); 
$count=mysqli_num_rows($result);	
if($count>0)
{
$query1="delete from notice where nid='$nid' ";
$result1=mysqli_query($conn,$query1);
header("location:notices.php");
}
else
{
	?>
<h1>DATA NOT REGISTERED!!</h1>

<?php
} 
?>