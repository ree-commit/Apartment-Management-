<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";

$selected_val=$_SESSION["flat"];
if(!empty($_POST['issued_receipt']) && isset($_POST['issued_receipt']))
$_SESSION["reciept"]=$_POST['issued_receipt']; 

$selected_val2 = $_SESSION["reciept"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


echo $selected_val." ".$selected_val2;
$result = mysqli_query($conn,"SELECT * FROM ".$selected_val." where issued_receipt='".$selected_val2."'")or die("Error: " . mysqli_error($conn));
//echo"hello";
$row = mysqli_fetch_array($result);
	
	echo "<center><form action='' method='POST'><table>";
	echo"<tr><th>Door no: </th><td><input type=text  name='door' value=". $row['door'] . " disabled></td></tr>";
	echo"<tr><th>flat owner's name:</th><td><input type=text name='name' value=". $row['name'] ." disabled></td></tr>";
	echo"<tr><th>month:</th><td><input type=text name='month' value=". $row['month'] ." ></td></tr>";
	echo"<tr><th>Mode of payment:</th><td><input type=text name='paymode' value=". $row['paymode'] ." ></td></tr>";
	echo"<tr><th>cheques/transaction/reciept no:  </th><td><input type=text name='chq_trac_no' value=". $row['chq_trac_no'] ." ></td></tr>";
	echo"<tr><th>date of payment: </th><td><input type=text name='paydate' value=". $row['paydate'] ." ></td></tr>";
	echo"<tr><th>Reciept no: </th><td><input type=text name='issued_receipt' value=". $row['issued_receipt'] ." disabled></td></tr>";
	echo"<tr><th>Amount: </th><td><input type=text name='amount' value=". $row['amount'] ." ></td></tr></table>";
	echo"<button name='submit1' value='update' type='submit'>update</button>
	<button name='submit2' value='delete' type='submit'>Delete</button></center>";
	$f = $row['issued_receipt'];
	if(isset($_POST['month']) && isset($_POST['paymode']) && isset($_POST['chq_trac_no']) && isset($_POST['paydate']) && isset($_POST['amount']) && isset($_POST['submit1']) )
	{
		/*
		$sql="update flat1 set month='".$_POST['month']."', paymode='".$_POST['paymode']."',
		chq_trac_no='".$_POST['chq_trac_no']."',paydate='".$_POST['paydate']."',
		amount='".$_POST['amount']."'; ";
		*/
		
		$a= $_POST['month'];
		$b = $_POST['paymode'];
		$c= $_POST['chq_trac_no'];
		$d = $_POST['paydate'];
		$e = $_POST['amount'];
		//$f=
		//echo $f;
		//$f=$_POST['issued_receipt'];
		$sql="update flat1 set month='$a', paymode='$b',chq_trac_no='$c',paydate='$d',amount='$e' where issued_receipt='$f' ;";
		
		//echo $sql;
		//echo $f;
		//echo "<script>alert();</script>";
	if($result1=$conn->query($sql))
	{
		
	//die('There was an error running the query [' . $conn->error . ']');
	//echo "<script>alert();</script>";
	echo '<script type="text/javascript">

          window.onload = function ()
           { alert("Data updated successfully"); }
		 

	</script>';
	 header("Location:udv.php");
	}
	else
	{
	echo '<script type="text/javascript">

          window.onload = function () { alert("Error" . $conn->connect_error); }

	</script>';
	}
}
else if(isset($_POST['submit2']))
{
//$s=$_POST['issued_receipt'];
	echo "elseif";
$sql2="delete from $selected_val where issued_receipt='$f'";
if($result1=$conn->query($sql2))
{
	echo "hello";
	echo '<script type="text/javascript">

          window.onload = function ()
           { alert("Data deleted successfully"); }
		 

	</script>';
	 header("Location:udv.php");
}
	else
	{
	echo '<script type="text/javascript">

          window.onload = function () { alert("Error" . $conn->connect_error); }

	</script>';
	}
}

?>