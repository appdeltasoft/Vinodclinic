<?php
include('session.php');
include('db_conn.php');
$tamount=0;
$i=0;
if (isset($_REQUEST['submit'])) {
	$fr=$_POST['frdate'];
	$to=$_POST['todate'];
						}
	$query=mysqli_query($con,"SELECT * FROM `pres` WHERE `ts` BETWEEN '$fr' AND '$to'"); //fr means highest vaue of date
	if ($query->num_rows>0) {
	while($rows = $query-> fetch_assoc()){  
      $amount=$rows['amount'];
      $tamount+=$amount;
      $i+=1;
  }
      
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<label>Total Consultations</label><br>&nbsp;&nbsp;&nbsp;&nbsp;<label><h2><?php echo($i);?></h2></label>
<label>Total Collections</label><br>&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo "<h2> $tamount</h2>"; ?></label>
</body>
</html>