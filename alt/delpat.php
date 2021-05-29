<?php
include("db_conn.php");
$id=$_GET["id"];

$sql="delete from tbl_med where id='$id'";
$res=mysqli_query($con,$sql);
$sql2="delete from tbl_pat where id='$id'";


$res=mysqli_query($con,$sql2);
header("location:docpat.php");
?>