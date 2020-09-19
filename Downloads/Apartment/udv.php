<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-color:black;
  background-image:url("wall.png");
}

* {
  box-sizing: border-box;
}

.bg-img {
  background-image: url("");
  
  min-height: 630px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  top: 15%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: black;
  opacity:0.6;
  color:white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.button1 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: rgb(0, 47, 188);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1:hover {background-color: #999;padding: 15px 35px;}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
* {
  box-sizing: border-box;
}
header {
  padding: 15px;
  text-align: center;
  font-size: 30px;
  color: white;
}
.overwiew{
  align:center;
  text-align: left;
  width: 100%;
  height: 350px; 
  background: black;
  background-image:url("Regis.jpg");
  padding: 20px;
  border: 1px solid #555;
  color:white;
  font-size:20px;
}

.div1{
  align:center;
  text-align: left;
  width: 100%;
  height: 370px; 
  background: black;
  padding: 20px;
  border: 1px solid #555;
  overflow: auto;
  white-space: nowrap;
}
.image{width:300px;height:200px;}
.image:hover {
  -ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5); 
  transform: scale(1.5); 
}
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 510px; 
  text-align:center;
  border-style: solid;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<header>
  <h3 style="text-align:center;font-size:35px;color:white;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  Apartment Management System</h3></header>
  <h3 style="text-align:center;font-size:35px;color:white;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  Treasurer Home Page</h3>
<br><br>
<div class="overwiew">
<p style="color:white;font-size:30px;"><i class="material-icons">camera</i>&nbsp Responsibilities</p>
 <p style="font-size=30px">
 
 <ul>
 <li>Deposit all the monies received by the society to the bank/depository and issue receipts to the payers.</li>
 <li>To keep a record of member’s contributions towards maintenance, reparation, common funds etc, to bring to the Secretary’s 
 notice any late payments or consistently defaulted payments.</li>
 <li>Pay all the vendors, service providers, etc through cheques, bills of exchange, etc. </li>
 <li>To compute maintenance charges, parking charges, premium payable by the transferor, and to compute the contribution amount of the members
 in any other charges, verify dues by members.</li>
 <li>Create a financial transaction policy when paying the vendors and creditors petty cash policy for internal expenses, cash withdrawal policy, etc.</li>
 </ul>
 
 
 </p>
</div><center>

<form action="#" method="post">
<select name="flat">
<option value="flat1">flat1</option>
<option value="flat2">flat2</option>
<option value="flat3">flat3</option>
<option value="flat4">flat4</option>
<option value="flat5">flat5</option>
</select>
<input type="submit" name="submit1" value="Get Selected Values" />
</form>
</center>
<?php

$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit1']))
{
$selected_val = $_POST['flat']; 

$_SESSION["flat"]=$selected_val;

 // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value

$sql = "SELECT * FROM $selected_val orderby date desc";
//$result = $conn->query($sql);
$sql1="select paydate from $selected_val";
$result1 = mysqli_query($conn,"select issued_receipt from $selected_val")or die("Error: " . mysqli_error($conn));

echo"<center><form action='view_pay.php' method='POST'><select name='issued_receipt'>";
while($row = mysqli_fetch_array($result1))
{
echo"<option value=".$row['issued_receipt'].">".$row['issued_receipt']."</option>";
}
echo"</select>";
//session_start();
if(isset($_POST['issued_receipt']))
{
$_SESSION["reciept"]=$_POST['issued_receipt'];
}echo"<input name='view' type='submit' value='view' /></form><center>";

/*if(isset($_POST['view']))
{
	echo"hello";
$selected_val2 = $_POST['payday'];
$result = mysqli_query($conn,"SELECT * FROM $selected_val where paydate=$selected_val2")or die("Error: " . mysqli_error($conn));
$n=1;
while($row = mysqli_fetch_array($result))
{
	echo "$selected_val"
	."<center><form action='update_pay.php' method='POST'><table>";
	echo"<tr><th>Door no: </th><td><input type=text  id='door".$n."' value=". $row['door'] . " disabled></td></tr>";
	echo"<tr><th>flat owner's name:</th><td><input type=text id='name' value=". $row['name'] ." disabled></td></tr>";
	echo"<tr><th>month:</th><td><input type=text id='month' value=". $row['month'] ." disabled></td></tr>";
	echo"<tr><th>Mode of payment:</th><td><input type=text id='paymode' value=". $row['paymode'] ." disabled></td></tr>";
	echo"<tr><th>cheques/transaction/reciept no:  </th><td><input type=text id='chq_trac_no' value=". $row['chq_trac_no'] ." disabled></td></tr>";
	echo"<tr><th>date of payment: </th><td><input type=text id='paydate' value=". $row['paydate'] ." disabled></td></tr>";
	echo"<tr><th>Reciept no: </th><td><input type=text id='issued_receipt' value=". $row['issued_receipt'] ." disabled></td></tr>";
	echo"<tr><th>Amount: </th><td><input type=text id='amount' value=". $row['amount'] ." disabled></td></tr></table>";
	echo"<button name='submit' value='update' type='submit'>update</button></center>";

}
}*/
}
mysqli_close($conn);

?>
<br><br><center><br><br>




</center>
</body>
</html>
