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
$lid = $_POST['lid'];


$sql = "SELECT * FROM letter where lid='$lid'  ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
   /*     echo "<table>";
            echo "<tr>";
                echo "<th>Reference</th>";
            echo "</tr>";
echo "<tr>";

                echo "<th>Date</th>";
echo "</tr>";
echo "<tr>";
                echo "<th>From </th>";
echo "</tr>";
echo"<tr>";
                echo "<th>To</th>";
echo"</tr>";
echo"<tr>";
echo "<th>Subject</th>";
echo"</tr>";
echo"<tr>";
echo "<th>Body</th>";
            echo "</tr>";
            echo "</table>";
            */

        while($row = mysqli_fetch_array($result)){
          echo "<center><table>";
            echo "<tr>";
                echo "Reference:"; echo "<td>" . $row['Reference'] . "</td>";
echo "</tr>";
echo "</table>";
echo "<table>";
echo "<tr>";
              echo "Date:";  echo "<td>" . $row['Date'] . "</td>";
echo "</tr>";
echo "</table>";
echo "<table>";
echo "<tr>";
                echo "From:"; echo "<td>" . $row['Froml'] . "</td>";
                echo"</table>";
                echo"<table>";
echo "</tr>";
echo "</table";
echo "<table";
echo "<tr>";
               echo "Dear"; echo "<td>" . $row['Too'] . ",</td>";
echo "</tr>";
echo "</table>";
echo "<table";

                echo "Subject"; echo "<td>" . $row['Subject'] . "</td>";
echo "<tr>";
echo "</table>";
echo "<table>";
                 echo "<td>" . $row['Body'] . "</td>";

            echo "</tr>";
    echo "</table></center>";     
        }
       
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
  
	
  <form method="post" action="viewletter.php">
  	
  	
  	  

  
  	 

  	<div class="input-group">
  	  <label>letter id</label>
  	  <input type="text" name="lid" required>
  	</div>

<div>  	
  	  <button type="submit" class="btn" name="check">Check</button>
  	</div>
  	
  </form>
</body>
</html>
