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
<br><br><form action='treasurer.php' method ='POST'><button name='back' style="float: right; width: 200px;height: 45px">back</button></form>
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

<?php

$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";


$conn = new mysqli($servername, $username, $password, $dbname);


//echo $selected_val." ".$selected_val2;
$result = mysqli_query($conn,"SELECT * FROM employee_salary")or die("Error: " . mysqli_error($conn));
//echo"hello";
while($row=mysqli_fetch_array($result))
{

	echo "<center><form action='' method='POST'><table>";
	echo"<tr><th>Employee id </th><td><input type=text  name='eid' value=". $row['eid'] . " disabled></td></tr>";
	echo"<tr><th>Employee name:</th><td><input type=text name='ename' value=". $row['ename'] ." disabled></td></tr>";
	echo"<tr><th>Mobile</th><td><input type=text name='month' value=". $row['mobile'] ." ></td></tr>";
	echo"<tr><th>Email</th><td><input type=text name='email' value=". $row['email'] ." ></td></tr>";
	echo"<tr><th>month salary</th><td><input type=text name='salary' value=". $row['month_salary'] ." ></td></tr>";
	echo"<tr><th>Employee type</th><td><input type=text name='etype' value=". $row['etype'] ." ></td></tr>";
	echo"<tr><th>status</th><td><input type=text name='status' value=". $row['status'] ." disabled></td></tr>";
	echo"</br></br></br>";
	
}
	
?></center></body></html>