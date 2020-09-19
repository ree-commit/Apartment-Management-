<?php
session_start();
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "12345", "abc");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    
    $email =  $_SESSION['email'];
    //echo($email);
    
    echo"<form method ='POST' action=''> <select name='cid'>";

    $sql1="SELECT cid from complain where email='$email'";

    if($result1=mysqli_query($link, $sql1))
    
        while($row = $result1->fetch_assoc())
        {
             $cid = $row["cid"];
             echo"<option value=$cid>$cid</option>";
        }
    

    echo"</select><center><button name='delete' type='submit'>delete</button></center></form>";

    if(isset($_POST['delete']))
    {
        $cid=$_POST['cid'];
        echo"selected cid is ".$cid;
    $sql = "DELETE FROM complain WHERE cid='$cid'";
    if(mysqli_query($link, $sql)){
        echo "Complain deleted successfully.";
        header('Location:userh.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    }
    
    //echo $email;
    // attempt insert query execution
   
    // close connection
    mysqli_close($link);
?>
