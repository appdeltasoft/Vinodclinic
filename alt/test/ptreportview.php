<?php
include("db_conn.php");
session_start();
if(isset($_SESSION["un"]))
{
?>
    <html>
    <head>
    <style>
table {
    border-collapse: collapse;
    width: auto;
}


th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

</head>
    <!-- <body bgcolor="#FFFFFF"><center><img src="doco.png" width="100"> -->
    <!-- <img src="pic.png" ></center> -->
   <center> 
    
   <h3>Prescription History</h3></center>
     <hr> 
    <?php
    $id = $_GET['id'];
   
    $sql="select * from pres WHERE id='$id'ORDER BY ts DESC" ;
    $res=mysqli_query($con,$sql);
    $no=mysqli_num_rows($res);
    if($no>0)
    {
    while($r=mysqli_fetch_array($res))
    {
    ?>
     <table align="center">
     
     
    <tr><td>Prescription</td>
        <td><?php echo $r['pres']; ?></td>
    </tr>
    
    <tr><td>Date/Time</td>
    <td><?php echo $r['ts']; ?></td>
    </tr>
    </tr>
    <tr><td>********************</td>
    <td>***********************</td>
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
    </body>
    
    </html>
    <?php
    

}
else
{
    ?>
    <span style="color:#F00"><i>please <a href="index.php">Login</a></i></span> 
    <?php
}
?>