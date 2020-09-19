<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";
$flat = $_POST['flat'];
$approvalstatus = $_POST['approvalstatus'];

echo "cid is".$cstatus;
// Create connection
 $conn = mysqli_connect('localhost','root','12345');
  if($conn)
  {
    //echo "connection successful";
  }
  else
  {
    echo " no connection"; 
  }

   mysqli_select_db($conn, 'abc');
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE owner set approvalstatus='$approvalstatus' WHERE flat ='$flat'";
  echo($sql);
    $result = mysqli_query($conn, $sql);
  //echo "User Profile Updated Successfully!";
if (!mysqli_commit($conn)) 
{
    print("Transaction commit failed\n");
    exit();
}
  //echo "<form action='userhome1.php' method='POST'><button type='submit'>Back to Profile</button></form>";
  //echo "";
else{
  echo "complain updated";
  //$username = $_SESSION['username'];
  header('Location:president.php'); 
}
 
?> 

   