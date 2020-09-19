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
  Secretary Home Page</h3>
<br><br>
<div class="overwiew">
<p style="color:white;font-size:30px;"><i class="material-icons">camera</i>&nbsp Responsibilities</p>
 <p style="font-size=30px">
 
 <ul>
 <li>Ensuring meetings are effectively organised and minuted</li>
<li>Maintaining effective records and administration</li>
<li>Upholding the legal requirements of governing documents, charity law, company law etc (where relevant)</li>
<li>Communication and correspondence</li>
<li>To keep a record of member’s contributions towards maintenance, reparation, common funds etc, to bring to the Secretary’s </li>
 <li>Notice any late payments or consistently defaulted payments.</li>
 </ul>
 
 
 </p>
</div>
<br><br><center><br><br>
<div id="div1" style="margin-left:50px;float:left;height:500px;width:500px;">

<form action='stackholder.php' ><button class="button1" style="align:center">Update/Delete/View Employee/Owner</button></form><br><br>
<form action='expenditure.php'><button class="button1"style="align:center">Financial Status</button></form><br><br>
<form action='notices.php'><button class="button1"style="align:center">Notice</button></form><br><br>
<form action='letters.php'><button class="button1"style="align:center">Letter</button></form><br><br>
<form action='tdues.php'><button class="button1"style="align:center">Dues</button></form><br><br>
<form action='expenditure.php'><button class="button1"style="align:center">Income and Expenditure Statement</button></form><br><br>
<form action='Regular_pay.php'><button class="button1"style="align:center">Monthly Maintenance Charges</button></form><br></div>
<form action='appowner.html'><button class="button1"style="align:center">Approve owner Docs</button></form><br><br>
<form action='app_complaint.php'><button class="button1"style="align:center">Approve complaints</button></form><br></div>
<form action='login.php'><button class="button1"style="align:center">Log out</button></form><br><br>

</center>
</body>
</html>
