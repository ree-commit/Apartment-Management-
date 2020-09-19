
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";

$selected_val=$_SESSION["email"];
//$selected_val2=$_SESSION["flats"];
$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM expenditure" )or die("Error: " . mysqli_error($conn));
echo "<center><form action='' method='POST'>";
while($row = mysqli_fetch_array($result))
{
echo" view expenditures ";
echo"<table><tr><th>Door no </th><td><input type=text  name='door' value=". $row['doorno'] . " disabled></td></tr>";
echo"<tr><th>Date </th><td><input type=text  name='date' value=". $row['date'] . " disabled></td></tr>";
echo"<tr><th>Description </th><td><input type=textarea  name='maintenanceDesc' value=". $row['maintenanceDesc'] . " disabled></td></tr>";
echo"<tr><th>Amount </th><td><input type=text  name='expenditure' value=". $row['expenditure'] . " disabled></td></tr></table></br></br>";
}

	
?>