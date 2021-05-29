<?php
// date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$username = "dekjlta";
$password = "denblta23@";
$dbname = "ecgmon1";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
//echo "Connected successfully";
?>