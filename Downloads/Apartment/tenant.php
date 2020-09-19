<!DOCTYPE html>
<html>
<head>
<title>Profile Page</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
h1   {color: black;}
h2    {color: black;text-shadow: 2px 2px Grey;}
h3{text-shadow: 2px 2px 3px Grey;}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("t.png");
  background-color:blue;
}

/* Style the header */
header {
  background-color:Tomato;
  background-image:url("wood.png");
  padding: 15px;
  text-align: center;
  font-size: 30px;
  color: black;
  font-size:20px;
  border: 1px solid #555;
  height:1000px;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  text-align: center;
  width: 30%;
  height: 800px; 
  background: rgb(255, 206, 144);
  background-image:url("old.png");
  padding: 20px;
  border: 1px solid #555;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: right;
  padding: 20px;
  width: 70%;
  background-color: rgb(255, 191, 182);
  background-image:url("white.png"); 
  border: 1px solid #555;
  height: 800px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: rgb(161, 148, 135);
   background-image:url("vintage.png");
  padding: 10px;
  text-align: center;
  color: black;
  border: 1px solid #555;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
  
}

article ul {
  list-style-type: none;
  margin: 2px;
  padding: 15px;
  overflow: hidden;
  background-color:rgb(255, 168, 125);
}

article li a{
  float: left;
  color: black;
  display: inline-block;
  text-align: center;
  padding:2px 7px;
}
a:hover {
  text-shadow: 2px 2px 4px red;
  -webkit-transform: scale(1.1);
}
div.ex1 {
  background-color: lightblue;
  background-image:url(school.png);
  padding:2px 7px;
  margin: 2px;
  width: 614px;
  height: 620px;
  border: 1px solid #555;
  overflow: auto;
}	
table {
  font-size: 20px;
  margin:20px;
  padding-left:20px;
  padding-top: 10px;
  padding-bottom:10px;
  padding-right:20px;
}
.container {
  position: absolute;
  right: 30%;
  top:40%;
  margin: 20px;
  max-width: 500px;
  padding: 16px;
  background-color: white;
  opacity:0.5;
  color:black;
  overflow: auto;
}

</style>
<body  topmargin="50" leftmargin="200" rightmargin="200">
<h3 style="text-align:center;font-size:35px;color:#b3b3ff;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  Apartment Management System</h3>
  
<?php
session_start();
echo "USER  : ";
echo $_SESSION['email'];
?>
<Header>
<h3 style="text-align:center;font-size:35px;color:white;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  Tenant</h3>
  <script src="check.js"></script>
  <form method="post" action="tenantdata.php" class="container" enctype="multipart/form-data">
  <label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" ><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly><br>

    <label for="text"><b>Contact Number</b></label><br>
    <input type="text" placeholder="Enter Contact Number" name="Contact" ><br>

    <label for="file"><b>Photo Upload</b></label><br>
    <input type="file" name="photo" value=""><br>
 
  <label for="file"><b>Photo ID Upload</b></label><br>
    <input type="file" name="photoid" value=""><br>
	
	<label for="text"><b>Father's Name</b></label><br>
    <input type="text" placeholder="Enter Father's Name" name="fname" ><br>
	
	<label for="text"><b>Mother's Name</b></label><br>
    <input type="text" placeholder="Enter Mother's name" name="mname" ><br>
	
	<label for="text"><b>Occupation</b></label><br>
    <input type="text" placeholder="Enter Occupation" name="occupation" ><br>
	
	<label for="text"><b>Permanent Address</b></label><br>
    <input type="text" placeholder="Enter Permanent Address" name="peradd" ><br>
	
	<label for="file"><b>Address proof</b></label><br>
    <input type="file" name="addprf" value=""><br>
	
	
	<label for="text"><b>Vehicle Type</b></label><br>
    <input type="text" placeholder="Enter Vehicle Type" name="vtype" ><br>
	
	<label for="text"><b>Vehicle Registration Number</b></label><br>
    <input type="text" placeholder="Enter Registration Number" name="vnumber" ><br>
	
    
    <button type="submit" class="btn">Submit</button>
  </form>
  
</Header>

</body>
</html>