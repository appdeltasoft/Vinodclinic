<?php
include("db_conn.php");
include("session.php");
   // session_start();
// require('config.php');
require('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST) & !empty($_POST)){
	$username = mysqli_real_escape_string($con, $_POST['username']);
	
	$sql = "SELECT * FROM `tbl_doc` WHERE un = '$username'";
	$res = mysqli_query($con, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$password = $r['pw'];
		$to = $r['email'];
		$subject = "Your Recovered Password";

		$message = "Please use this password to login " . $password;

		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: Aiswarya Baby <info@address.com>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		

		if(mail($to, $subject, $message, $headers)){
			echo "Your Password has been sent to your email id";
		}else{
			echo "Failed to Recover your password, try again";
		}

	}else{
		echo "User name does not exist in database";
	}
}


?>




