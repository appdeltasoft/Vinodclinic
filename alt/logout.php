<?php
session_start();
if(session_destroy())
{
	setcookie("Role", "close", time() + (10800 * 30), "/");
header("refresh:0.3;url=home.php");} 
?>