<?php
if(!isset($_COOKIE["Role"])) {
	header("location:home.php");
}
	else if($_COOKIE["Role"] == 'close')
			{
 			  header("location:home.php");
 			}
	else if($_COOKIE["Role"] == 'admin')
			{
 			  header("location:adminhome.php");
			}
	else if($_COOKIE["Role"] == 'Doctor')
			{
			 header("location:dochome.php");
			}
	else if($_COOKIE["Role"] == 'Receptionist')
			{
 			header("location:rechome.php");
			}
	else if($_COOKIE["Role"] == 'Pharmacist')
			{
  			header("location:phhome.php");
			}?>