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
  User Home Page</h3>
<br><br>
<div class="overwiew">
<p style="color:white;font-size:30px;"><i class="material-icons">camera</i>&nbsp Responsibilities</p>
 <p style="font-size=30px">
 
 </p>
</div>
<center>

<form action="#" method="post">
<select name="flat">
<option value="flat1">flat1</option>
<option value="flat2">flat2</option>
<option value="flat3">flat3</option>
<option value="flat4">flat4</option>
<option value="flat5">flat5</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
</center>
<?php
if(isset($_POST['submit']) && isset($_POST["flat"] )&& isset($_POST['flat']))
{
$selected_vall = $_POST["flat"]; 

$_SESSION["flats"]=$selected_vall;

 //Storing Selected Value In Variable
echo "You have selected :" .$selected_vall;  // Displaying Selected Value

echo "<center><form action='upay_insert.php' method='POST'><table>";
  echo"<tr><th>Door no: </th><td><input type=text  name='door' ></td></tr>";
  echo"<tr><th>flat owner's name:</th><td><input type=text name='name' ></td></tr>";
  echo"<tr><th>month:</th><td><input type=text name='month' ></td></tr>";
  echo"<tr><th>Mode of payment:</th><td><input type=text name='paymode' ></td></tr>";
  echo"<tr><th>cheques/transaction/reciept no:  </th><td><input type=text name='chq_trac_no'></td></tr>";
  echo"<tr><th>date of payment: </th><td><input type=text name='paydate'></td></tr>";
  echo"<tr><th>Reciept no: </th><td><input type=text name='issued_receipt'></td></tr>";
  echo"<tr><th>Amount: </th><td><input type=text name='amount'></td></tr></table>";
  echo"<button name='submit1' value='Add' type='submit'>Add</button>";

   

}
//$result = $conn->query($sql);



?>
<br><br><center><br><br>




</center>
</body>
</html>
