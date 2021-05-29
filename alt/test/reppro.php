<?php
include("db_conn.php");


$name=$_POST['name'];
$id=$_POST['id'];
$age=$_POST['age'];
$comp=$_POST['comp'];
$loh=$_POST['loh'];
$fh=$_POST['fh'];
$mh=$_POST['mh'];
$ape=$_POST['ape'];
$thi=$_POST['thi'];
$bow=$_POST['bow'];
$uri=$_POST['uri'];
$swe=$_POST['swe'];
$sle=$_POST['sle'];
$ther=$_POST['ther'];
$tos=$_POST['tos'];
$pato=$_POST['pato'];
$key=$_POST['key'];
$pres=$_POST['pres'];


$con=mysqli_connect("localhost","root","","ecgmon");
$sql="INSERT INTO tbl_med  VALUES ('$name','$id','$age','$comp','$loh','$fh','$mh','$ape','$thi','$bow','$uri','$swe','$sle','$ther','$tos','$pato','$key','$pres',CURRENT_TIMESTAMP)";
$res=mysqli_query($con,$sql);

echo "Record updated successfully"; 
header("location:docpat.php");;
?>