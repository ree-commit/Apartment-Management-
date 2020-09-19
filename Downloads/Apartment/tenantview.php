  <?php
  session_start();

$email=$_SESSION['email'];
echo "USER  : ";
echo $email;

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


?>
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
<Header>
<h3 style="text-align:center;font-size:35px;color:white;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  Tenant Profile</h3>
<p style="text-align:center;">
<?php
$sql = "SELECT * FROM tenant WHERE email='mehraricha29@gmail.com'";
$result = $conn->query($sql);
$file_path = 'photos/';
$result = mysqli_query($conn,"SELECT * FROM tenant WHERE email='$email'");
while($row = mysqli_fetch_array($result))
{
echo  "<img style='float:left;border-radius:80%' src='".$row['photo']."' height='150' width='150'/><br><br>";
echo "Name: ".$row['name']."<br><br>" ;
echo "Father's Name:  " . $row['fname'] . "<br><br>";
echo "Mother's Name:  " . $row['mname'] . "<br><br>";
echo "Occupation:  " . $row['occupation'] . "<br><br>";
echo  "PhotoID: <br><img src='".$row['photoid']."' height='150' width='150'/><br><br>";
echo "Permanent Address:  " . $row['peradd'] . "<br><br>";
echo  "Address Proof: <br><img src='".$row['addprf']."' height='150' width='150'/><br><br>";
echo "email:  " . $row['email'] . "<br><br>";
echo "Contact: ".$row['contact']."<br><br>" ;
echo "Vehicle Type:  " . $row['vehicletype'] . "<br><br>";
echo "Vehicle Registration Number: ".$row['vehicleregno']."<br><br>" ;

}


mysqli_close($conn);

?>
 </p>


</Header>
<form action='login.php'> <button >logout</button></form>
</body>
</html>