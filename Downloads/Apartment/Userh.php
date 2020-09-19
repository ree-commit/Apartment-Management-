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
   position: absolute;
   left: 45%;
}

.button1:hover {background-color: #999;padding: 15px 35px;}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button2 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
   position: absolute;
   left: 45%;
}

.button2:hover {background-color: #999;padding: 15px 35px;}

.button2:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
* {
  box-sizing: border-box;
}

.button3 {
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
   position: absolute;
   left: 42%;
   top: 70%
}

.button3:hover {background-color: #999;padding: 15px 35px;}

.button3:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.button4 {
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
   position: absolute;
   left: 46%;
   top: 85%
}

.button4:hover {background-color: #999;padding: 15px 35px;}

.button4:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
<header>
<?php
session_start();
$email=$_SESSION["email"];
echo "email is ".$email;
?>

  <h3 style="text-align:center;font-size:35px;color:white;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  Apartment Management System</h3></header>
   <h3 style="text-align:center;font-size:35px;color:white;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  USER Home  Page</h3></header>


<br><br><center>
<form action='Uhome.php'><button class="b1" >Edit Profile</button></form></br></br>
<form action='Vuser.php'> <button class="b1">View Profile</button></form></br></br>
<form action='tenantview.php'> <button class="b1">View Tenant Details</button></form></br></br>

<form action='complain.php'><button class="b1">Create complaint</button></form></br></br>


<form action='show_complains.php' ><button class="b1" style="align:center">Update/Delete complaint</button></form><br><br>
<form action='expenditure.php'><button class="b1"style="align:center">Income and Expenditure Statement</button></form></br></br>
<form action='pay.php'><button class="b1"style="align:center">payments</button></form><br><br>


<form action='notice.php'><button class="b1"style="align:center">view notice</button></form><br><br>

<form action='login.php'> <button class="b1">logout</button></form>

<br><br></center>

</body>
</html>
