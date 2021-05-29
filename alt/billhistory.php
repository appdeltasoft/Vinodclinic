<?php
include('session.php');
include('db_conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>drp</title>
	<style type="text/css">
		.container{
			width: 600px;
			height: 400px;
			margin-right: auto;
			margin-left: auto;
		}
		#frame1{
			width: 100%;
			height: 60px;
		}
		#frame2{
			width: 100%;
			height: 500px;
		}

	</style>
</head>
<body>
	<div class="container">
<iframe id="frame1" src="billhistorydrp.php"></iframe>
<iframe id="frame2" name="frame1" src=""></iframe></div>
</body>
</html>