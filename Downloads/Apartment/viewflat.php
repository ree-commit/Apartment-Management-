<?php
$user = "root";
$pass = "12345";
$db = "abc";
session_start();
$conn = new mysqli("localhost" , "root" , "12345" , "$db");



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

				$dno = $_POST['dno'];
				$query="select * from owner where Door='$dno' ";
$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result); 
$count=mysqli_num_rows($result);	
if($count>0)
{?>
<table cellpadding="7" cellspacing="10"style="margin-left:25%;background-color:  #08A091;color:white;width:50%;border-radius: 10px;">
  
    <tr>
      <td style="font-weight:bold">Door Number</td>
      <td>:</td>
      <td><?php echo $row["Door"]?></td>
    </tr>

<tr>
      <td style="font-weight:bold">Father Name</td>
      <td>:</td>
      <td><?php echo $row["fname"]?></td>
    </tr>
<tr>
      <td style="font-weight:bold">Mother Name</td>
      <td>:</td>
      <td><?php echo $row["mname"]?></td>
    </tr>
<tr>

      <td style="font-weight:bold">Occupation</td>
      <td>:</td>
      <td><?php echo $row["occupation"]?></td>
    </tr>
<tr>

      <td style="font-weight:bold">Communication Address</td>
      <td>:</td>
      <td><?php echo $row["commadd"]?></td>
    </tr>
<tr>

      <td style="font-weight:bold">Permanent Address</td>
      <td>:</td>
      <td><?php echo $row["peradd"]?></td>
    </tr>
<tr>


      <td style="font-weight:bold">Email ID</td>
      <td>:</td>
      <td><?php echo $row["email"]?></td>
    </tr>
<tr>
      <td style="font-weight:bold">Mobile Number</td>
      <td>:</td>
      <td><?php echo $row["contact"]?></td>
    </tr>
<tr>
    <td style="font-weight:bold">Flat Occupancy Status</td>
      <td>:</td>
      <td rowspan="2"><?php if($row["flatocc"]=='vacant'){?><a href="tenantview.php" ><button style="border-radius:10px;background-color:#4CAF50;color: white;padding:10px 15px;margin-left:2% ;border: none;" name="submit" value="Submit">VIEW TENANT
</button></a><?php }else 
{echo $row["flatocc"];}?></td>
    </tr>
    
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
