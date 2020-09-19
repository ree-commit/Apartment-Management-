<?php
session_start();
 // initializing variables
//$door = "";
//$email    = "";
//$mobile = "";
$errors = array(); 

// connect to the database
$db=mysqli_connect('localhost', 'root', '12345', 'abc');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
 $eid =  $_POST['eid'];
 $name =  $_POST['name'];
  $work =  $_POST['work'];
  $salary = $_POST['salary'];
  $mobno=$_POST['mobno'];
  
  

  
  


  // Finally, register user if there are no errors in the form
  
  	

  	$query = "INSERT INTO employee (eid, name, work,salary, mobno) 
  			  VALUES('$eid', '$name', '$work', '$salary','$mobno')";
  	mysqli_query($db,$query);
  	
	

}






?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="createemployee.php">
  	
  	<div class="input-group">
  	  <label>Employee Id</label>

  
  	  <input type="text" name="eid"  required>
  	</div>
<div class="input-group">
  	  <label>work</label>
  	  <input type="text" name="work"  required>
  	</div>
<div class="input-group">
	  <label>salary</label>

  
  	  <input type="text" name="salary"  required>
  	</div>

<div class="input-group">
      <label>name</label>
      <input type="text" name="name"  required>
    </div>




<div class="input-group">
	  <label>mobile</label>

  
  	  <input type="mobile" name="mobno"  required>
  	</div>

  	
  	  <button type="submit" class="btn" name="reg_user">Send</button>
  	</div>
  
  </form>
</body>
</html>
