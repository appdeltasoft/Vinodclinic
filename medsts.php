<?php
 include("db_conn.php");
include("session.php");


$name = $_GET['name'];

$id= $_GET['id'];
$sql = "UPDATE pres SET status='Delivered' WHERE name='$name' AND id='$id'";
$qry = mysqli_query($con,$sql);
if ($qry) {

	 header("location:patientsph.php");

	# code...
}

