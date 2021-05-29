<?php
include("db_conn.php");
include("session.php");

$newname=$_POST['newname'];
$newgen=$_POST['gender'];
$yearOfBirth = $_POST['yearOfBirth'];
$monthOfBirth = $_POST['monthOfBirth'];
$dateOfBirth = $_POST['dateOfBirth'];
// Validate
if ($yearOfBirth != '' && $monthOfBirth != '' && $dateOfBirth != '')
 {
  // Generate date of birth in format of YYYY-mm-dd
  $newdate = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
  
  // Then insert to database as normal
  }
$newemail=$_POST['newemail'];
$newph=$_POST['newno'];
$newad=$_POST['newad'];


$sql = "UPDATE tbl_pat SET name='$newname',gender='$newgen',dob='$newdate',email='$newemail',phone='$newph',address='$newad'";
$res=mysqli_query($con,$sql);
$no=mysqli_num_rows($res);

echo "Record updated successfully"; 
header("location:viewpt.php");;
?>