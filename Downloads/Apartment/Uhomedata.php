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
  
	  //$Door=$_POST['Door'];
	  $email=$_POST['email'];
	  $Contact=$_POST['Contact'];
	  $filename=$_FILES["photo"]["name"];
	  $tempname=$_FILES["photo"]["tmp_name"];
	  $folder="photos/".$filename;
	  move_uploaded_file($tempname,$folder);
	    $filename1=$_FILES["photoid"]["name"];
	  $tempname1=$_FILES["photoid"]["tmp_name"];
	  $folder1="photos/".$filename1;
	  move_uploaded_file($tempname1,$folder1);
		 $fname=$_POST['fname'];
	  $mname=$_POST['mname'];
	  $Commadd=$_POST['Commadd'];
   $peradd=$_POST['peradd'];
	$Occupation=$_POST['occupation'];
	$flatocc= 'vacant';
	//echo $folder;
	//echo $folder1;
	 $sql="Update flatowner set contact='".$Contact."',photo='".$folder."',photoid='".$folder1."',fname='".$fname."',mname='".$mname."',
	 occupation='".$Occupation."',commadd='".$Commadd."',peradd='".$peradd."' where email='".$email."'";
	// INSERT INTO flatowner (Door, email,contact,photo,photoid,fname,mname,occupation,commadd,peradd,flatocc) VALUES 
	//('".$Door."','".$email."','".$Contact."','".$folder."','".$folder1."','".$fname."','".$mname."','".$Occupation."','".$Commadd."','".$peradd."','".$flatocc."')";
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
  