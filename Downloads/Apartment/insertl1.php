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
 $lid =  $_POST['lid'];
 $from =  $_POST['from'];
  $to =  $_POST['to'];
  $body = $_POST['body'];
  $subject=$_POST['subject'];
  $reference=$_POST['reference'];
$date=$_POST['dd'];  
  

  
  


  // Finally, register user if there are no errors in the form
  
  	

  	$query = "INSERT INTO letter (Froml, Body, Too, Subject, Reference,lid,Date) 
  			  VALUES('$from', '$body', '$to', '$subject','$reference','$lid','$date')";
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
  	<h2>Create</h2>
  </div>
	
  <form method="post" action="insertl1.php">
  	
  	<div class="input-group">
  	  <label>from</label>

  
  	  <input type="text" name="from"  required>
  	</div>
<div class="input-group">
  	  <label>To</label>
  	  <input type="text" name="to"  required>
  	</div>
<div class="input-group">
	  <label>Subject</label>

  
  	  <input type="text" name="subject"  required>
  	</div>
<div class="input-group">
	  <label>Date</label>

  
  	  <input type="date" name="dd"  required>
  	</div>
<div class="input-group">
	  <label>Body</label>

  
  	  <input type="text" name="body"  required>

  	</div>
<div class="input-group">
	  <label>Reference</label>

  
  	  <input type="text" name="reference"  required>
  	</div>
  	<div class="input-group">
  	  <label>letter id</label>
  	  <input type="text" name="lid" required>
  	</div>
  	
  	  <button type="submit" class="btn" name="reg_user">Send</button>
  	</div>
  
  </form>
</body>
</html>
