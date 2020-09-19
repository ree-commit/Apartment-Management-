<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";

$selected_val=$_SESSION["email"];
$selected_val2=$_SESSION["flats"];
$conn = new mysqli($servername, $username, $password, $dbname);
$result = mysqli_query($conn,"SELECT * FROM ".$selected_val2." ORDER BY paydate desc LIMIT 0,1")or die("Error: " . mysqli_error($conn));
echo "<center><form action='' method='POST'>";
while($row = mysqli_fetch_array($result))
{
echo"Transaction successful";
echo"<table><tr><th>Month </th><td><input type=text  name='month' value=". $row['month'] . " disabled></td></tr>";
echo"<tr><th>Amount </th><td><input type=text  name='door' value=". $row['amount'] . " disabled></td></tr>";
echo"<tr><th>Transaction Id </th><td><input type=text  name='door' value=". $row['issued_receipt'] . " disabled></td></tr></table></br></br>";
}

	
?>