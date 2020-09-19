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
if (isset($_POST['createflatt'])) {
  // receive all input values from the form
 $door =  $_POST['door'];
 $flat =  $_POST['flat'];
  $father =  $_POST['father'];
  $mother = $_POST['mother'];
  $name=$_POST['name'];
  $occupation =  $_POST['occupation'];
  $peradd = $_POST['peradd'];
    $commadd = $_POST['commadd'];
  $mob=$_POST['mob'];
   $email =  $_POST['email'];
  $flatstatus = $_POST['flatstatus'];
 // $approvalstatus="not yet aproved";
  
  // Finally, register user if there are no errors in the form
  
  		$query = "INSERT INTO owner (door,flat,father,mother,name,occupation,peradd, mob,email,flatstatus,commadd,approvalstatus) 
  			  VALUES('$door', '$flat', '$father', '$mother','$name', '$occupation', '$peradd','$mob', '$email', '$flatstatus', '$commadd','not yet aproved')";
  	mysqli_query($db,$query);
}






?>
<!DOCTYPE html>


  <html>
<head>
<script>
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
    f.peradd.value = f.commadd.value;
  }
}
</script>
<tile>Flat Create</title>
<body>

<form action="createflat1.php" method="post">
<div id="createflat" class="container tab-pane fade"><br>
     
       <div class="container" width="85%" style="padding:70px;margin-right:25%;background-color:  #08A091;color:white;width:50%;border-radius: 10px;"">
 <h3>Create Flat Owner Profile</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label >Flat no:</label>
      <input type="text" class="form-control" id="flatno" placeholder="Enter Flat no" name="flat">
    </div>
    <div class="form-group">
    <label >Door no:</label>
      <input type="text" class="form-control" id="doorno" placeholder="Enter door no" name="door" onkeyup="checkpattern(this)" pattern="[0-9]{1}-[A-Z]-[0-9]{2}-[0-9]{3}/[0-9]{1}"  required> <div id="result"></div>
    </div>
	<div class="form-group">
    <label > name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
	
    <div class="form-group">
    <label >Father Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter  father name" name="father">
    </div>
  
	
	
	 
   
    <div class="form-group">
    <label >Mother name:</label>
      <input type="text" class="form-control" id="mname" placeholder="Enter Mother name" name="mother">
    </div>
	  <div class="form-group">
    <label >Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
    <label >Phone number:</label>
      <input type="text" class="form-control" id="phno" placeholder="Enter Phone no" name="mob">
    </div>
    <div class="form-group">
    <label >Occupation:</label>
      <input type="text" class="form-control" id="occ" placeholder="Enter Occupation" name="occupation">
    </div>
    <div class="form-group">
    <label >Communication Address:</label>
      <input type="text" class="form-control" id="commadd" placeholder="Enter Communication Address" name="commadd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" id="billingtoo" name="billingtoo" onclick="FillBilling(this.form)">Is permanent address same as communication address</label>
    </div>
    <div class="form-group">
    <label >Permanent Address:</label>
      <input type="text" class="form-control" id="peradd" placeholder="Enter Permanent Address" name="peradd">
    </div>
    <div class="form-group">
    <label>Flat Occupancy status</label>
     <select class="form-control" id="flatstatus" name="flatstatus">
    <option>Yes</option>
    <option>No</option>
    </select>
    </div>
   
	 <div class="form-group">
    <label >Approval Status:</label>
      <input type="text" class="form-control" id="approvalstatus" placeholder="not yet approved" name="approvalstatus" disabled>
    </div>

    <button type="submit" name="createflatt" class="btn btn-default">Submit</button>
  </form>
</div>  
    </div>
	</form>
	</body>
	</html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
