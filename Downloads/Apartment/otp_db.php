<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";
$email=trim($_GET["email"]);
$potp=trim($_GET["otp"]);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT vkey FROM remail WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 {
 	while($row = $result->fetch_assoc())
 	 {
      $otp=$row["vkey"];
    }
   if( $potp==$otp)
   {
   	echo "<center><h3>otp verified</h3>";
     
   require 'phpmailer/class.phpmailer.php';
   require 'phpmailer/class.smtp.php';
  
   $mail = new PHPMailer;
   $mail ->setFrom("mehraricha29@gmail.com");
   $mail ->addAddress($email);
   $mail ->Subject = 'Set Password';
   $mail ->Body = "http://127.0.0.1/apartment/setpass.php?email=$email";
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
      echo"mail sent";
       //require 'otp_verify.php';
   }

   	echo "check your mail for password set link";

   }



   else echo("incorrect otp");
 }
 else {
 	echo "not found";  
}
$conn->close();
?> 