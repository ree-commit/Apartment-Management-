<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-color:black;
}

* {
  box-sizing: border-box;
}

.bg-img {
   background-image: url("Regis.jpg");
  
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
  overflow: auto;
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

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: black;
  font-size:20px;
  font-weight: bold;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<?php  
error_reporting(E_ALL ^ E_NOTICE);
       $host = "localhost";
	$userName = "root";
	$password = "12345";
	$dbName = "abc";
	// Create database connection
	$conn = new mysqli($host, $userName, $password, $dbName);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	echo $conn;
}
?> 
<?php
// define variables and set to empty values
$DoorErr = $emailErr = $ContactErr = "";
$Door = $email = $Contact= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Door"])) {
    $DoorErr = "Door Number is required";
  } else {
    $Door = test_input($_POST["Door"]);
    // check if Door Number is in required format
    if (!preg_match("/^[0-9]{1}-[A-Z]{1}-[0-9]{2}-[0-9]{3}\\/[0-9]{1}$/",$Door)) {
      $DoorErr = "Check Door Number Format";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["Contact"])) {
    $Contact = "Contact is required";
  } else {
    $Contact = test_input($_POST["Contact"]);
    // check if Contact Number is valid
    if (!preg_match("/^[0-9]{10}$/", $Contact)) {
      $ContactErr = "Invalid Contact Number";
    }    
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<div class="bg-img">
<h3 style="text-align:center;font-size:35px;color:white;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  Apartment Management System</h3></header>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="container">  
<h1 style="text-align:center">Registration</h1>
  Door Number: <input type="text" name="Door" pattern="[0-9]{1}-[A-Z]{1}-[0-9]{2}-[0-9]{3}/[0-9]{1}" >
  <span class="error"> <?php echo $DoorErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" pattern=".+@gmail.com">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Contact Number: <input type="text" name="Contact" pattern="[0-9]{10}">
  <span class="error"><?php echo $ContactErr;?></span>
  <br><br>
  <button type="submit" class="btn" name="Register" value="Register">  Register</button>
</form>
</div>

<?php
 
//require_once("config.php");
//if((isset($_POST['Door'])&& $_POST['email'] !='') && (isset($_POST['Contact'])&& $_POST['your_email'] !=''))
//{
// require_once("contact_mail.php
//“);
if (preg_match("/^[0-9]{1}-[A-Z]{1}-[0-9]{2}-[0-9]{3}\\/[0-9]{1}$/",$Door) && filter_var($email, FILTER_VALIDATE_EMAIL)){
$Door = $conn->real_escape_string($_POST['Door']);
$email = $conn->real_escape_string($_POST['email']);
$Contact = $conn->real_escape_string($_POST['Contact']);
$sql="SELECT Door,email FROM remail WHERE email='$email' and door='$Door'";
$result = $conn->query($sql);
if($result->num_rows > 0){
//die('There was an error running the query [' . $conn->error . ']');
echo '<script type="text/javascript">

          window.onload = function () { alert("Check your email for verification"); }

</script>';
$sql1="INSERT INTO FLATOWNER (EMAIL) VALUES ('$email')";
$result1 = $conn->query($sql1);
mysqli_select_db($conn, 'abc');
	$vkey =rand(100000,999999);
	
	$result = mysqli_query($conn, "update remail set vkey = '$vkey' where email ='$email'");


	if ($result) {
		# code...
		
    
   require 'phpmailer/class.phpmailer.php';
   require 'phpmailer/class.smtp.php';

   
   $mail = new PHPMailer;
   $mail ->setFrom("mehraricha29@gmail.com");
   $mail ->addAddress($email);
   $mail ->Subject = 'OTP';
   $mail ->Body = " OTP=$vkey";
   //$mail ->Body="http://127.0.0.1/web/Regis.php";
   $mail ->IsSMTP();
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = 'ssl://smtp.gmail.com';
   $mail ->SMTPAuth = true;
   $mail ->Port = 465;
   //$mail ->SMTPDebug = 1;
   
   
  
   
   //$mail ->IsHTML(true);
   $mail ->Username = "mehraricha29@gmail.com";
   $mail ->Password = "roshan@290497";
  
   
  
   

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo $vkey;
      echo "<center><div align='center' style='width: 500px;height:300px; border: solid 2px green;''>
      <h1>Enter OTP</h1><p style='color:green;''> Check your email for the OTP</p>
      <form name='frm' method='get' action='otp_db.php'>
      <input type='text' name='email' value='$email' style='display:none;' >
<input type='text' name='otp' placeholder='One Time Password' style='width: 200px;height: 40px; font-size: 16px' maxlength='6' minlength='6' required> <br/><br/>
<button name='submit' type='submit' style='width:80px;height: 30px;  background-color: blue;''>Submit</button></form></div></center> ";



       //require 'otp_verify.php';

   }
   }

	
	else{
		echo "Error";
	}
}
else
{
echo '<script type="text/javascript">

          window.onload = function () { alert("Check your Data"); }

</script>';
}
//else
//{
//echo "Please fill Name and Email";
//}
/* if(preg_match("/^[0-9]{10}$/", $Contact)){
$sql1="INSERT INTO Rcontact (Door, Contact) VALUES ('".$Door."','".$Contact."')";
}
if(!$result = $conn->query($sql1)){
//die('There was an error running the query [' . $conn->error . ']');
echo '<script type="text/javascript">

          window.onload = function () { alert("Check your data"); }

</script>';
}
else
{
echo '<script type="text/javascript">

          window.onload = function () { alert("Check your email for verification"); }

</script>';
}*/
}

?>




</body>
</html>
