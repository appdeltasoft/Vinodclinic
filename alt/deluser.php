<?php
include("db_conn.php");
$un=$_GET["un"];

$sql="delete from tbl_doc where un='$un'";
$res=mysqli_query($con,$sql);
header("location:viewusers.php");
?>