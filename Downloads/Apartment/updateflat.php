<?php
$user = "root";
$pass = "";
$db = "abc";
session_start();
$conn = new mysqli("localhost" , "root" , "12345" , "$db");



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

				$dno = $_POST['dno'];
				$query="select * from owner where door='$dno' ";
$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result); 
$count=mysqli_num_rows($result);	
if($count>0)
{?>

<form action="update1.php " method="post" enctype="multipart/form-data">
<br>
 <table cellpadding="7" cellspacing="10"style="margin-left:25%;background-color:  #08A091;color:white;width:50%;border-radius: 10px;">

  <tr>

      <td style="font-weight:bold">Flat Number</td>
   <td>:</td>
      <td>
        <input type="text" name="flat" value="<?php echo $row["flat"]; ?>" required/></td>

    </tr>
<tr>
      <td style="font-weight:bold">Name</td>
      <td>:</td>
      <td><input type="text" name="dnew" value="<?php echo $row["door"]; ?>"required/></td>
    </tr>
 
<tr>
      <td style="font-weight:bold">Name</td>
      <td>:</td>
      <td><input type="text" name="name" value="<?php echo $row["name"]; ?>"required/></td>
    </tr>
<tr>
      <td style="font-weight:bold">Father Name</td>
      <td>:</td>
      <td><input type="text" name="father" value="<?php echo  $row["father"];  ?>"required/></td>
    </tr>
<tr>
      <td style="font-weight:bold">Mother Name</td>
      <td>:</td>
      <td><input type="text" name="mother" value="<?php echo  $row["mother"]; ?>"required/></td>
    </tr>
<tr>
      <td style="font-weight:bold">Occupation</td>
      <td>:</td>
      <td><input type="text"name="occupation" value="<?php echo  $row["occupation"]; ?>"/></td>
    </tr>
<tr>
      <td style="font-weight:bold">Communication Address</td>
      <td>:</td>
      <td><input type="text"  name="commadd" value="<?php echo  $row["commadd"]; ?>"/></td>
    </tr>

    
    
    <tr>
      <td></td>
      <td></td>

      <td>CLICK HERE FOR PERMANENT ADDRESS SAME AS COMMUNICATION ADDRESS<input type="checkbox" name="sameadd" onclick="Fillperadd(this.form)"></td>
    </tr>
    <script>
function Fillperadd(f) {
  if(f.sameadd.checked == true) {
    f.peradd.value = f.commadd.value;
  }
}
</script>
<tr>
      <td style="font-weight:bold">Permanent Address</td>
      <td>:</td>
      <td><input type="text" name="peradd" id="peradd" value="<?php echo  $row["peradd"]; ?>"/></td>
    </tr>
    
<tr>
      <td style="font-weight:bold">Mobile Number</td>
      <td>:</td>
      <td><input type="number"  minlength="10" maxlength="10" pattern="[0-9]{10}"name="mob" required value="<?php echo  $row["mob"]; ?>"/></td>
    </tr>
    <tr>
      <td style="font-weight:bold">Email ID</td>
      <td>:</td>
      <td><input type="email" name="email" required value="<?php echo  $row["email"]; ?>"/></td>
    </tr>
<tr>
      <td style="font-weight:bold">Flat Occupancy Status</td>
      <td>:</td>
      <td><?php echo $row["flatstatus"]?></td>
    </tr>
     
    <tr>
      <br>
      <td rowspan="2">
<button type="submit" style="border-radius:10px;background-color:#4CAF50;color: white;padding:10px 15px;margin-left:90% ;border: none;" name="submit" value="Submit">SUBMIT
</button></td>
<td>
</td></tr>
  </table>
<?php

}
else
{
	?>
<h1>DATA NOT REGISTERED!!</h1>

<?php
} 
?>
