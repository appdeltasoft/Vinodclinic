 <?php
 include("db_conn.php");
include("session.php");
   //include("db_conn.php");
   // session_start();

   $no=0;

    if(isset($_GET['submit'])){
    //  $name=$_GET['namesearch'];
       $phno=$_GET['nosearch'];
       if($_GET['nosearch']==""){
        $sql = "SELECT * FROM pres ORDER BY ts DESC";
       }
       else if($_GET['nosearch']!="" ){
         $sql = "SELECT * FROM pres WHERE id = '$phno' ORDER BY ts DESC";
         
      }
     
      $res=mysqli_query($con,$sql);
      $no=mysqli_num_rows($res);
      
    }
   
    
    if(!isset($_GET['nosearch'])){
       $sql = "SELECT * FROM pres ORDER BY ts DESC";
        $res=mysqli_query($con,$sql);
        $no=mysqli_num_rows($res);
      }

?>

<!DOCTYPE html>
<html>
<head>
<body bgcolor="#FFFFFF"><center><img src="phm.png" width="100">
    <img src="pic.png" ></center> <a href="phhome.php"><img class= "top-right1"src="home.png" width="50px" height="50px"></a>
   <!-- <center> <img src="admino.jpg" width=150/></center> -->
    
   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>


body  {
  background-image: url("bl-gr.jpg");
  background-size: 1365px 700px;
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



th {
    background-color: #4CAF50;
    color: white;
    text-align: left;
    padding: 8px;
    border-bottom: 1px grey;
}

tr:nth-child(even){background-color:#f3f3f3}

table {
    /*border-collapse: collapse;*/
    width: 100%;
}
td {

    text-align: left;
    padding: 8px;
    color: black;
  }

.btnRegister {
    padding: 13px;
    background-color: #5d9cec;
    color: #f5f7fa;
    cursor: pointer;
    border-radius: 4px;
    width: 100%;
    border: #5791da 1px solid;
    font-size: 1.1em;
}



tr : nth-child(even){background-color: #f2f2f2}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}


p {
  color: black;
}
/*.button2 {border-radius: 4px;}*/



</style>

<body>
<form method="get" action="" >

  <!-- <input class="demo-input-box" id="myInput" onkeyup="myFunction()" type="text" name="namesearch" placeholder="Name" value="<?php if(isset($_GET['namesearch'])) //echo $_GET['namesearch']; ?>"> -->
   <input type="int" name="nosearch" placeholder="id" value="<?php  if(isset($_GET['nosearch'])) echo $_GET['nosearch']; ?>"> 
   <input type="submit"   name="submit" value="Search"> 

</form>




   <h3>Patients</h3>
    
    <?php

	if($no>0)
	{
	?>
    <table id="myTable">
  <tr class="header">
    <th>Name</th>
    <th>id</th>
    <th>Date/Time</th>
    <!-- <th>Keynote</th> -->
    <th>Prescribtion</th>
    <th>Amount</th>
    <th>Med. Status</th>
    
    </tr>
    <?php
	while($r=mysqli_fetch_array($res))
	{
        $pre= $r['pres'];
        $status= $r['status'];
        $name= $r['name'];
        $id= $r['id'];
        $amount=$r['amount'];
      
        
	?>
    <tr style="border-bottom: 2px grey;">
    <td><?php echo $name; ?></td>
    <td><?php echo $id; ?></td>
    <td><?php echo $r['ts']; ?></td>
    <!-- <td><?php //echo $r['key']; ?></td> -->
    <td><?php echo $pre; ?></td>
    <td><?php echo $amount;?></td>
    <td><?php echo $status; if ($r['status']=="Not Delivered" ) {echo "
    <a href='medsts.php?name=$name&amp;id=$id' style='text-decoration: none; font-weight: bold;''>  mark as delivered</a>";}?></td>
    
    </tr>
    <?php
	}
	?>
    </table>
    <?php
	}
	else
	{
		echo "No Records!!!!!!!!";
	}
	?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

    </body>
    
    </html>
   