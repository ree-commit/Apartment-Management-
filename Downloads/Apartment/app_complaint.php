<?php
session_start();

$conn = mysqli_connect("localhost", "root", "12345", "abc");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM complain ";
     $result = $conn->query($sql);
 
  if (($result->num_rows) > 0) {
    while($row = $result->fetch_assoc())
    {
        $email=$row['email'];
        $cdesc = $row["cdesc"];
        $ctype = $row["ctype"];
        $cid = $row["cid"];
        $cstatus=$row["status"];
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
<center><form action="edit_app.php" method="POST">
   <div class="container">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="" name="email" value = '<?php echo $email ?>' disabled><br><br>

    <label for="cid"><b>C ID</b></label>
    <input type="text" placeholder="" name="cid" value = '<?php echo $cid ?>' ><br><br>

    <label for="ctype"><b>Complain Type</b></label>
    <input type='text' name='ctype' value = '<?php echo $ctype ?>' disabled><br><br>

    <label for="cdesc"><b>Complain description</b></label>
    <input type='text' name='cdesc' value = '<?php echo $cdesc?>' disabled><br><br>
        
    <label for="ctype"><b>Complaint status</b></label>
    <input type='text' placeholder="status" name='cstatus' value = '<?php echo $cstatus ?>'><br><br>

    <button type="submit">Update</button>
  </div>
</form>

</center>


</body>
</html>
