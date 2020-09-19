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
//$ctype = $_POST['ctype'];

$sql = "SELECT * FROM flatowner where email='$email' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<center><table>";
            echo "<tr>";
                echo "<th>emailid</th>";
                echo "<th>door no</th>";
                echo "<th>contact</th>";
                echo "<th>occupation</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['Door'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['occupation'] . "</td>";
            echo "</tr>";
        }
        echo "</table><center>";
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
  
	
  <form method="post" action="#">
  	<div class="input-group"><center>
      
    <br><br>
  	  <label>Email</label>
  	  <input type="email" name="email" required><br><br>
  	</div>
<div>  	
  	  <button type="submit" class="btn" name="check">Check</button>
  </center>	</div>
  	
  </form>
</body>
</html>
