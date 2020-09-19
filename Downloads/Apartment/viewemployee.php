<?php
$user = "root";
$pass = "";
$db = "abc";
session_start();
$conn = new mysqli("localhost" , "root" , "12345" , "$db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

				$eno = $_POST['eno'];
				$query="select * from employee where eid='$eno' ";
$result=mysqli_query($conn,$query); 
$row=mysqli_fetch_assoc($result); 
$count=mysqli_num_rows($result);	
if($count>0)
{?>
<table cellpadding="7" cellspacing="10"style="margin-left:25%;background-color:  #08A091;color:white;width:50%;border-radius: 10px;">
    <tr>


   <td style="font-weight:bold">Employee Id</td>
   <td>:</td>
      <td><?php echo $row["eid"]?></td>

    </tr>
    <tr>
      <td style="font-weight:bold">Name</td>
      <td>:</td>
      <td><?php echo $row["name"]?></td>
    </tr>

<tr>
      <td style="font-weight:bold">Work</td>
      <td>:</td>
      <td><?php echo $row["work"]?></td>
    </tr>
<tr>
      <td style="font-weight:bold">Contact</td>
      <td>:</td>
      <td><?php echo $row["mobno"]?></td>
    </tr>
<tr>
      <td style="font-weight:bold">Salary</td>
      <td>:</td>
      <td><?php echo $row["salary"]?></td>
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
