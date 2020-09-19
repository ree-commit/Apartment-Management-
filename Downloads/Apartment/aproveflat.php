<?php
session_start();

$conn = mysqli_connect("localhost", "root", "12345", "abc");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM owner where approvalstatus='not yet aproved' ";
     $result = $conn->query($sql);
 
  if (($result->num_rows) > 0) {
    while($row = $result->fetch_assoc())
    {
        $door=$row['door'];
        $flat = $row["flat"];
        $father = $row["father"];
        
        $mother=$row["mother"];
		        $name=$row["name"];
				        $occupation=$row["occupation"];
        $commadd=$row["commadd"];
        $peradd=$row["peradd"];
				        $mob=$row["email"];
						        $email=$row["email"];
								        $flatstatus=$row["flatstatus"];
										        $approvalstatus=$row["approvalstatus"];



		


        
        
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
<center><form action="edit_aprove.php" method="POST">
   <div class="container">

    <label for="door"><b>door</b></label>
    <input type="text" placeholder="" name="door" value = '<?php echo $door ?>' disabled><br><br>

    <label for="flat"><b>flat</b></label>
    <input type="text" placeholder="" name="flat" value = '<?php echo $flat ?>' ><br><br>

    <label for="mother"><b>mother</b></label>
    <input type='text' name='mother' value = '<?php echo $mother ?>' disabled><br><br>

    <label for="father"><b>father</b></label>
    <input type='text' name='father' value = '<?php echo $father?>' disabled><br><br>
	
	<label for="name"><b>name</b></label>
    <input type='text' name='name' value = '<?php echo $name?>' disabled><br><br>
	
        <label for="occupation"><b>occupation</b></label>
    <input type='text' name='occupation' value = '<?php echo $occupation?>' disabled><br><br>
	
	<label for="commadd"><b>commadd</b></label>
    <input type='text' name='commadd' value = '<?php echo $commadd?>' disabled><br><br>
	
	<label for="peradd"><b>peradd</b></label>
    <input type='text' name='peradd' value = '<?php echo $peradd?>' disabled><br><br>
	<label for="mob"><b>mob</b></label>
    <input type='text' name='mob' value = '<?php echo $mob?>' disabled><br><br>
	<label for="email"><b>email</b></label>
    <input type='text' name='email' value = '<?php echo $email?>' disabled><br><br>
	<label for="flatstatus"><b>flatstatus</b></label>
    <input type='text' name='cdesc' value = '<?php echo $flatstatus?>' disabled><br><br>
    <label for="approvalstatus"><b>aprove flatowner</b></label>
    <input type='text' placeholder="status" name='approvalstatus' value = '<?php echo $approvalstatus ?>'><br><br>

    <button type="submit">Update</button>
  </div>
</form>

</center>


</body>
</html>

