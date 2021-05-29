<?php
include("db_conn.php");
include("session.php");



$un=$_POST["un"];
$pw=$_POST["pw"];

$sql=mysqli_query($con,"select * from tbl_login where un='$un' and pw='$pw'");

if ($sql->num_rows>0) {
	while($rows = $sql-> fetch_assoc()){  
			$role=$rows['role'];
			$name=$rows['un'];}
			
			$_SESSION['un']="$name";//set name to session - This will be needed to restricted pages pertaining to other unregistered persons.
		if($role == 'admin')
			{
 			  header("location:adminhome.php");
			}
		else if($role == 'Doctor')
			{
			 header("location:dochome.php");
			}
		else if($role == 'Receptionist')
			{
 			header("location:rechome.php");
			}
		else if($role == 'Pharmacist')
			{
  			header("location:phhome.php");
			}
		else{
	// echo "ENTER VALID USERNAME AND PASSWORD";
		$message = "Enter valid USERNAME or PASSWORD";
			echo "<script type='text/javascript'>setTimeout(\"location.href = 'index.php';\",1500); alert('$message');</script>";
	//header("location:index.php");

}}
else{
	$message = "Enter valid USERNAME or PASSWORD";
	echo "<script type='text/javascript'>setTimeout(\"location.href = 'index.php';\",1500); alert('$message');</script>";
}
?>