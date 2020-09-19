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
  background-image: url("apt.jpg");

  min-height: 630px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 35%;
  top: 25%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
  opacity:0.8;
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
  color: white;
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

<div class="bg-img"><br>
<p style="text-align:center;  font-size: 40px;font-style: italic;"> Apartment Management System</p>
  <form action="#" class="container" method="POST">
    <h1 style="text-align:center">Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email " name="email" pattern=".+@gmail.com" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name='btn' class="btn">Login</button>
  </form>
   <?php
session_start();
if(isset($_POST['btn']) && isset($_POST['email']))
{
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['psw'];

header('Location:login_db.php');
}
?>

</div>


</body>
</html>
