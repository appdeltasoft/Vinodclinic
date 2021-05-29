<?php
include("db_conn.php");
include("session.php");
$name=$_POST["name"];
$gender=$_POST["gender"];

$yearOfBirth = $_POST['yearOfBirth'];
$monthOfBirth = $_POST['monthOfBirth'];
$dateOfBirth = $_POST['dateOfBirth'];
// Validate
if ($yearOfBirth != '' && $monthOfBirth != '' && $dateOfBirth != '')
 {
  // Generate date of birth in format of YYYY-mm-dd
  $date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
  
  // Then insert to database as normal
  }
  
/*
$dob=$_POST["dob"];*/
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$uname=$_POST["un"];
$pwd=$_POST["pw"];

$sql1="SELECT * FROM tbl_login WHERE un ='$uname'";
$result=mysqli_query($con,$sql1);
$r = mysqli_fetch_array($result);
$no=mysqli_num_rows($result);

if ($no>0) {
	$message = "Username already taken";
echo "<script type='text/javascript'>setTimeout(\"location.href = 'addrec.php';\",1500); alert('$message');</script>";
}

else {




$sql="INSERT INTO tbl_doc values('$name','$gender','Receptionist','$date','$email','$phone','$address','$uname','$pwd')";
$res=mysqli_query($con,$sql);
$sqli="INSERT INTO tbl_login values('$uname','$pwd','Receptionist')";
$res=mysqli_query($con,$sqli);
header("location:adminhome.php");
}
?>