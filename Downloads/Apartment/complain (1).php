<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "12345", "abc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['check'])) { 
// Attempt select query execution
$email = $_POST['email'];
$ctype = $_POST['ctype'];

$sql = "SELECT * FROM complain where emailid='$email' AND ctype='$ctype' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>emailid</th>";
                echo "<th>cdate</th>";
                echo "<th>cdesc</th>";
                echo "<th>ctype</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['emailid'] . "</td>";
                echo "<td>" . $row['cdate'] . "</td>";
                echo "<td>" . $row['cdesc'] . "</td>";
                echo "<td>" . $row['ctype'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
} 
// Close connection
mysqli_close($link);
?>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
	
  <form method="post" action="complain.php">
  	
  	
  	  

  
  	 

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required>
  	</div>
<div class="input-group">
  	  <label>Complain type</label>
  	  <input type="text" name="ctype" required>
  	</div>
<div>  	
  	  <button type="submit" class="btn" name="check">Check</button>
  	</div>
  	
  </form>
</body>
</html>
