<?php
session_start();
$email =$_SESSION['email'];
echo("email is".$email);
$conn = mysqli_connect("localhost", "root", "12345", "abc");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    //$email=trim($_GET["email"]);
    
    //$cdesc =  $_POST['cdesc'];
    //$ctype =  $_POST['ctype'];
    
    //echo "email=".$email;
    ////echo $cdesc;
   //// echo $ctype;

    // attempt insert query execution
    $sql = "SELECT * FROM complain WHERE email='$email'";
     $result = $conn->query($sql);
   //var_dump($result);
  if (($result->num_rows) > 0) {
   // echo "$result->num_rows";
   // echo "output data of each row";
    while($row = $result->fetch_assoc())
    {
        $cdesc = $row["cdesc"];
        $ctype = $row["ctype"];
        $cid = $row["cid"];
        echo $cid."	";
        echo $ctype."	";
        echo $cdesc."	";
        echo "<br>";
        
	//$_SESSION ['email'] = $email;

    }

	}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><form action="edit_complain.php" method="POST">
   <div class="container">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="" name="email" value = '<?php echo $email ?>' readonly><br><br>

    <label for="cid"><b>C ID</b></label>
    <input type="text" placeholder="" name="cid" value = '<?php echo $cid ?>' readonly><br><br>

    <label for="ctype"><b>Complain Type</b></label>
    <input type='text' name='ctype' value = '<?php echo $ctype ?>'><br><br>

    <label for="cdesc"><b>Complain description</b></label>
    <input type='text' name='cdesc' value = '<?php echo $cdesc?>'><br><br>
        
    <button type="submit">Update</button>
  </div>
</form>

<form action="delete_complain.php" method="POST">


    <button type="submit">Delete</button>
</form>
</center>


</body>
</html>
