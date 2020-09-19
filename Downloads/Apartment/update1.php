<?php
$user = "root";
$pass = "";
$db = "abc";
session_start();
$conn = new mysqli("localhost" , "root" , "12345" , "$db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$dno=$_POST["dnew"];
$flat=$_POST['flat'];
$mob=$_POST['mob'];
$mail=$_POST['email'];
$name=$_POST['name'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$peradd=$_POST['peradd'];
$commadd=$_POST['commadd'];
$occupation=$_POST['occupation'];

$query="UPDATE owner SET flat='$flat',mob='$mobno',name='$name',father='$father',mother='$mother',occupation='$occupation',commadd='$commadd',peradd='$peradd',email='$mail' where door='$dno' ";
      mysqli_query($conn,$query) or die(mysqli_error($conn));

header("location:stackholder.php");
?>



