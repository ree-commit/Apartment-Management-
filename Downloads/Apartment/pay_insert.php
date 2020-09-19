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

    if(isset($_POST['door']) && isset($_POST['name']) &&isset($_POST['month']) && isset($_POST['paymode']) && isset($_POST['chq_trac_no']) && isset($_POST['paydate']) && isset($_POST['amount']) && isset($_POST['submit1']) )
  {
     $n=$_POST['name'];
    $do=$_POST['door'];
    $f=$_POST['issued_receipt'];
    $a= $_POST['month'];
    $b = $_POST['paymode'];
    $c= $_POST['chq_trac_no'];
    $d = $_POST['paydate'];
    $e = $_POST['amount'];
$sql = "INSERT into flat1 (door,name,month,paymode,chq_trac_no,paydate,amount, issued_receipt) Values('$do','$n','$a','$b','$c','$d','$e','$f')";
echo $sql;
if($result1=$conn->query($sql))
  {
    
  //die('There was an error running the query [' . $conn->error . ']');
  //echo "<script>alert();</script>";
    echo "query done..";
  echo '<script type="text/javascript">

          window.onload = function ()
           { alert("Data added successfully"); }
     

  </script>';
  header("Location: treasurer.php");
  }
  else
  {
  echo '<script type="text/javascript">

          window.onload = function () { alert("Error" . $conn->connect_error); }

  </script>';
  }
}mysqli_close($conn);
?>