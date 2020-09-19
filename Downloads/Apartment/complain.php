<?php
//after userhome1.php
session_start();
$email =  $_SESSION['email'];
echo $email;
?>
 <!DOCTYPE html>
<html>
<body>
<form action="create_complain.php" method="POST">
  <div class="container">
      <input type='text' name='email' value='$email' style='display:none;' >

    <label for="ctype"><b>Complain type</b></label>
    <input type="text" placeholder="electrical/plumbing/etc" name="ctype" required>

    <label for="cdesc"><b>Description</b></label>
    <input type="text" placeholder="Enter complain description" name="cdesc" required>


        
    <button type="submit" name="submit">Create complain</button>
    
  </div>
</form>
</body>
</html>
 