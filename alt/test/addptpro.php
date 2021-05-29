<?php
include("db_conn.php");
include("session.php");
$name=$_POST["name"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$time = new DateTime('now');
$dob = $time->modify('-'.$age.' year')->format('Y-m-d');

// $yearOfBirth = $_POST['yearOfBirth'];
// $monthOfBirth = $_POST['monthOfBirth'];
// $dateOfBirth = $_POST['dateOfBirth'];
// // Validate
// if ($yearOfBirth != '' && $monthOfBirth != '' && $dateOfBirth != '')
//  {
//   // Generate date of birth in format of YYYY-mm-dd
//   $date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
  
//   // Then insert to database as normal
//   }
  
//$dob=$_POST["dob"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$mrno=$_POST["mrno"];



$sql="INSERT INTO `tbl_pat` (`name`, `gender`, `dob`, `email`, `phone`, `address`, `mrno`) VALUES ('$name','$gender', '$dob', '$email', '$phone', '$address', '$mrno')";
$res=mysqli_query($con,$sql);
echo "added";
header("location:dochome.php");
?>