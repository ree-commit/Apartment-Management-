<?php
session_start();
$user = "root";
$pass = "";
$db = "abc";

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

<form action="update2.php " method="post" enctype="multipart/form-data">
<br>
 <table cellpadding="7" cellspacing="10"style="margin-left:25%;background-color:  #08A091;color:white;width:50%;border-radius: 10px;">

  <tr>

      <td style="font-weight:bold">Employee Id</td>
   <td>:</td>
      <td>
        <input type="text" name="eid" value="<?php echo $row["eid"]; ?>" required /></td>

    </tr>
 
<tr>
      <td style="font-weight:bold">Name</td>
      <td>:</td>
      <td><input type="text" name="name" value="<?php echo $row["name"]; ?>"required/></td>
    </tr>
<tr>
      <td style="font-weight:bold">Work</td>
      <td>:</td>
      <td><input type="text" name="work" value="<?php echo  $row["work"];  ?>"required/></td>
    </tr>
    <tr>
      <td style="font-weight:bold">Mobile No</td>
      <td>:</td>
      <td><input type="text" name="mob" value="<?php echo  $row["mobno"]; ?>"required/></td>
    </tr>
<tr>
      <td style="font-weight:bold">Salary</td>
      <td>:</td>
      <td><input type="text" name="salary" value="<?php echo  $row["salary"]; ?>"required/></td>
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