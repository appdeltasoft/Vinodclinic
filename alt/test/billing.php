 <?php
 include("db_conn.php");
 include("session.php");
   //include("db_conn.php");
$id=$_GET['id'];
$tamount=0;
$que=mysqli_query($con,"SELECT * FROM `tbl_pat` WHERE  `id`='$id'");
$query=mysqli_query($con,"SELECT * FROM `pres` WHERE `id`='$id'");
$no=mysqli_num_rows($que);
$no_pres=mysqli_num_rows($query);
if ($no>0) {
  while($r=mysqli_fetch_array($que)){
      $name=$r['name'];
      
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  
  <body bgcolor="#FFFFFF"><center><img src="rec.png" width="100">
    <img src="pic.png" ></center> <a href="rechome.php"><img class= "top-right1"src="home.png" width="50px" height="50px"></a>
   <!-- <center> <img src="admino.jpg" width=150/></center> -->
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>


body  {
  background-image: url("bl-gr.jpg");
  background-size: 1365px 700px;
}
 
#payment{
  width: 10px;
}



th {
    background-color: #4CAF50;
    color: white;
    text-align: left;
    padding: 8px;
}

tr : nth-child(even){background-color: #f2f2f2}

table {
    border-collapse: collapse;
    width: 50%;
  }
td {
    text-align: left;
    padding: 8px;
    color: black;
  }
  .top-right1 {
  position: absolute;
  top: 50px;
  right: 90px;
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
  /*background-color: #006400;*/
  padding: 8px 8px;
  border-radius: 10px;
}


/*.btnRegister {
    padding: 13px;
    background-color: #5d9cec;
    color: #f5f7fa;
    cursor: pointer;
    border-radius: 4px;
    width: 100%;
    border: #5791da 1px solid;
    font-size: 1.1em;
}
*/

p {
  color: black;
}
/*.button2 {border-radius: 4px;}*/



</style>

<body>

<?php


if($no_pres>0)
{
?>
<br><br><br>
<center>
<table>
 
  <tr colspan='2'>
    <th style="color: black">NAME</th><th  style="color: black"><?php echo $name; ?></th></tr>
    <tr colspan='2'>
    <th  style="color: black">ID</th><th  style="color: black"><?php echo $id; ?></th></tr>
   <tr><th>Date</th> <th>Amount</th></tr>
   

<?php
  while($row=mysqli_fetch_array($query))
  {
?>
<tr>
   
    <td><?php echo $row['ts']; ?></td>
     
    <td><?php echo $row['amount']; $tamount+=$row['amount'];?></td>

    <!--<td>   <input list="payment" name="status"  placeholder="Select Payment Status">
  <datalist id="payment">
  <option >Paid</option>
  <option >Unpaid</option>
</datalist>
<input type="submit" name="Submit" value="Submit">

</select> </td>-->

    
</tr>
<?php
  }
?>
<tr style="border-top: 2px solid black;"><td>Total Amount</td><td><?php echo "$tamount"; ?></td></tr>
</table>

</center>
<?php

  }
  else
  {
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p> <?php echo "No Records!!!!!!!!"; ?></p>
  
<?php    
  }
?>
</body>

</html>
	