<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";

$_SESSION["flat"]="flat1";
$selected_val=$_SESSION["flat"];
/*if(!empty($_POST['issued_receipt']) && isset($_POST['issued_receipt']))
$_SESSION["reciept"]=$_POST['issued_receipt']; 
$selected_val2 = $_SESSION["reciept"];
*/// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


//echo $selected_val." ".$selected_val2;
$result = mysqli_query($conn,"SELECT month, sum(amount) FROM ".$selected_val." group by month")or die("Error: " . mysqli_error($conn));
//echo"hello";
echo "<center><form action='treasurer.php' method='POST'>";
while($row = mysqli_fetch_array($result))
	{
	echo "<table>";
	echo"<tr><th>month: </th><td><input type=text name='amount' value=". $row['month'] ." ></td></tr>";

	echo"<tr><th>sum Amount: </th><td><input type=text name='amount' value=". $row['sum(amount)'] ." ></td></tr>";
	$total=$row['sum(amount)']-10000;
	echo"<tr><th>Dues Amount: </th><td><input type=text name='amount' value=". $total ." ></td></tr></table><br><br>";

	}
	echo"<button name='submit1' value='update' type='submit'>Back</button>";
	if(isset($_POST['submit1']))
	{

	}
	
?>