<?php
 include("db_conn.php");
include("session.php");


// $name = $_GET['name'];

$id= $_GET['id'];
$sql = "UPDATE `tbl_pat` SET dstatus='Ready to meet Doctor?', time=CURRENT_TIMESTAMP WHERE  id='$id'";
$qry = mysqli_query($con,$sql);
if ($qry) {
     // echo "<script>";
     // echo "alert('Now tell him/her to meet doctor')";
     // echo "</script>";
      header("refresh:0.01;url=addpts.php");}
	 ?>


