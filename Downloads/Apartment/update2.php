<?php
session_start();
$user = "root";
$pass = "";
$db = "abc";

$conn = new mysqli("localhost" , "root" , "12345" , "$db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$eno=$_POST["eid"];
$work=$_POST['work'];
$salary=$_POST['salary'];
$name=$_POST['name'];
$mobno=$_POST['mobno'];
echo $eno;
echo "hi";
$query="UPDATE employee SET work='$work',mobno='$mobno',name='$name',salary='$salary' where eid='$eno' ";
      mysqli_query($conn,$query) or die(mysqli_error($conn));

header("location:stackholder.php");
?>



