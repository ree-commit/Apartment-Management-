<?php


$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
session_start();
if(isset($_POST['email']))
{
$_SESSION['email']=$_POST['email'];
}
$email=$_SESSION['email'];
$sql = "SELECT * FROM flatowner WHERE email='$email'";
$result = $conn->query($sql);
$file_path = 'photos/';
$result = mysqli_query($conn,"SELECT * FROM flatowner WHERE email='$email'");
while($row = mysqli_fetch_array($result))
{
echo  "<img style='float:left;border-radius:80%' src='".$row['photo']."' height='150' width='150'/><br><br>";
echo "Door:  " . $row['Door'] . "<br><br>";
echo "email:  " . $row['email'] . "<br><br>";
echo  "PhotoID: <br><img src='".$row['photoid']."' height='250' width='250'/><br><br>";
echo  "AAdhar card: <br><img src='".$row['addarpic']."' height='250' width='250'/><br><br>";
}

mysqli_close($conn);

?>

<form action="#" method="post">

	<button name="approve">approve</button>
</form>

<?php
if(isset($_POST['approve']))
{
 $g='approve';
	$sql1="UPDATE flatowner set approve='$g' where email= 'reenaoswal404@gmail.com';";
	echo $sql1;
	if ($result = mysqli_query($conn,$sql1))
		{echo "updated";
	/*if($result1=$conn->query("update flatowner set approve='$g' where email= '$email'"))
	{
	echo
	 '<script type="text/javascript">
          window.onload = function ()
           { alert("Data updated successfully"); }
	 

	</script>';*/
	 header("Location:president.php");
	}

}
?>