<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "abc";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$result = mysqli_query($conn,"SELECT * FROM flat1 where approve='not' limit 1")or die("Error: " . mysqli_error($conn));
//echo"hello";
$row = mysqli_fetch_array($result);
	
	echo "<center><form action='' method='POST'><table>";
	echo"<tr><th>Door no: </th><td><input type=text  name='door' value=". $row['door'] . " disabled></td></tr>";
	echo"<tr><th>flat owner's name:</th><td><input type=text name='name' value=". $row['name'] ." disabled></td></tr>";
	echo"<tr><th>month:</th><td><input type=text name='month' value=". $row['month'] ." disabled ></td></tr>";
	echo"<tr><th>Mode of payment:</th><td><input type=text name='paymode' value=". $row['paymode'] ." disabled></td></tr>";
	echo"<tr><th>cheques/transaction/reciept no:  </th><td><input type=text name='chq_trac_no' value=". $row['chq_trac_no'] ." disabled ></td></tr>";
	echo"<tr><th>date of payment: </th><td><input type=text name='paydate' value=". $row['paydate'] ."  disabled></td></tr>";
	echo"<tr><th>Reciept no: </th><td><input type=text name='issued_receipt' value=". $row['issued_receipt'] ." disabled></td></tr>";
	echo"<tr><th>Amount: </th><td><input type=text name='amount' value=". $row['amount'] ." disabled ></td></tr>";
	echo"<tr><th>Aprove: </th><td><input type=text name='approve' value=". $row['approve'] ." ></td></tr></table>";
	echo"<button name='submit1' value='update' type='submit'>update</button>";
	$f = $row['issued_receipt'];
	if( isset($_POST['submit1'])&& isset($_POST['approve']) )
	{
		/*
		$sql="update flat1 set month='".$_POST['month']."', paymode='".$_POST['paymode']."',
		chq_trac_no='".$_POST['chq_trac_no']."',paydate='".$_POST['paydate']."',
		amount='".$_POST['amount']."'; ";
		*/
		
		
		$g=$_POST['approve'];
		//$f=
		//echo $f;
		//$f=$_POST['issued_receipt'];
		$sql="update flat1 set approve='$g' where issued_receipt='$f' ;";
		
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
	 header("Location:president.php");
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
	 header("Location:president.php");
}
	else
	{
	echo '<script type="text/javascript">

          window.onload = function () { alert("Error" . $conn->connect_error); }

	</script>';
	}
}

?>