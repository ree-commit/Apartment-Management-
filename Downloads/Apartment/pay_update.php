  <?php
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
  
	  $door=$_POST['door'];
	  $name=$_POST['name'];
	  //$issued_reciept=$_POST['issued_reciept'];
	  
	  $month=$_FILES["month"];
	  $paymode=$_FILES["photo"];
	 $chq_trac_no=$_POST['chq_trac_no'];
	  $paydate=$_POST['paydate'];
   $amount=$_POST['amount'];
	 $sql="Update flat1 set name='".$name."',issued_reciept='".$issued_reciept."',month='".$month."',paymode='".$paymode."',chq_trac_no='".$chq_trac_no."',
	 paydate='".$paydate."',amount='".$amount."' where Door='".$door."'";
		 if(!$result = $conn->query($sql)){
			//die('There was an error running the query [' . $conn->error . ']');
				echo '<script type="text/javascript">

          window.onload = function () { alert("Data Edited successfully"); }

		</script>';
		//header("Location: Vuser.php");
		}
		else
		{
		echo '<script type="text/javascript">

          window.onload = function () { alert("Error Editing" . $conn->connect_error); }

		</script>';
		}
		header("Location: Vuser.php");
  ?>
  