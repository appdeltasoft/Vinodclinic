<?php
 ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);


session_start();
$session=$_SESSION['un'];
if($session==null){
	echo "<script>";
	echo "alert('Unauthorised Login');";
	echo"</script>";
	header("refresh:0.002;url=index.php");
}
 

// session_start();
// $ss=$_SESSION['un'];
// if(!$ss){
// 	echo"<script>";
// 	echo "alert('You Need To Login First')";
// 	echo "</script>";
// 	header("refresh:0.01;url=index.php");}


// ?>