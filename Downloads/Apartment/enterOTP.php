

<?php  
error_reporting(E_ALL ^ E_NOTICE);
       $host = "localhost";
	$userName = "root";
	$password = "root";
	$dbName = "abc";
	// Create database connection
	$conn = new mysqli($host, $userName, $password, $dbName);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	echo $conn;
   }
   $email = $_POST['email'];
   session_start();
$_SESSION['email']=$email;
echo $email;
    echo "<center><div align='center' style='width: 500px;height:300px; border: solid 2px green;''>
      <h1>Enter OTP</h1><p style='color:green;''> Check your email for the OTP</p>
      <form name='frm' method='get' action='otp_db.php'>
      <input type='text' name='email' value='$email' style='display:none;' >
<input type='text' name='otp' placeholder='One Time Password' style='width: 200px;height: 40px; font-size: 16px' maxlength='6' minlength='6' required> <br/><br/>
<button name='submit' type='submit' style='width:80px;height: 30px;  background-color: blue;''>Submit</button></form></div></center> ";


 
 
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
      header("Location: enterOTP.php");

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


