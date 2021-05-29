<?php
 include("db_conn.php");
 include("session.php");
 error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$date=date("h:i:sa");
// echo $date;
$id=$_GET['id'];
$images=$con->query("SELECT `file_name` FROM `images` WHERE `file_name` LIKE '$id%' ");
$num=mysqli_num_rows($images);
if($num){
	 while($r=mysqli_fetch_array($images)){
	 $file=$r['file_name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo "<img src='uploads/$file '>"; }}?>
</body>
</html>