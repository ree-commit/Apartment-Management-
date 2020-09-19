<?php
session_start();
//after complain.php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "12345", "abc");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //$email=trim($_GET["email"]);
    $email =  $_SESSION['email'];
    //$cid =  $_POST['cid'];
    $cdesc =  $_POST['cdesc'];
    $ctype =  $_POST['ctype'];
    
    //echo $email;
    //echo $cid;
    //$cid =rand(100000,999999);
    // echo "cid=$cid";
    // attempt insert query execution
    $sql = "INSERT INTO complain (email,ctype,cdesc,cdate,status) VALUES ('$email', '$ctype', '$cdesc','2019-11-22','pending')";

    if(mysqli_query($link, $sql)){
        echo "Complain added successfully.";
        header("Location: userh.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>