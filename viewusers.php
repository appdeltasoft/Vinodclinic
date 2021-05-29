 <?php
 include("db_conn.php");
 include("session.php");
   
   $no=0;

   if(isset($_GET['submit'])){
      $name=$_GET['namesearch'];
      $phno=$_GET['nosearch'];
      if($_GET['nosearch']=="" AND $_GET['namesearch']==""){
        $sql = "SELECT * FROM tbl_doc";
      }
      else if($_GET['nosearch']!="" AND $_GET['namesearch']==""){
         $sql = "SELECT * FROM tbl_doc WHERE phone = '$phno'";
      }
      else if($_GET['nosearch']=="" AND $_GET['namesearch']!=""){
         $sql = "SELECT * FROM tbl_doc WHERE name ='$name'";
      }
      else if($_GET['nosearch']!="" AND $_GET['namesearch']!=""){
        $sql = "SELECT * FROM tbl_doc WHERE name ='$name' AND phone = '$phno'";
      }
      

      $res=mysqli_query($con,$sql);
      $no=mysqli_num_rows($res);
    }
   
    //if($_GET['nosearch']=="" AND $_GET['namesearch']==""){
    if(!isset($_GET['nosearch']) AND !isset($_GET['namesearch'])){
       $sql = "SELECT * FROM tbl_doc";
        $res=mysqli_query($con,$sql);
        $no=mysqli_num_rows($res);
      }

?>

<!DOCTYPE html>
<html>
<head>
 <body bgcolor="#FFFFFF"><center><img src="admina.png" width="100">
    <img src="pic.png" ></center> <a href="adminhome.php"><img class= "top-right1"src="home.png" width="50px" height="50px"></a>
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

a {
  text-decoration: none;
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


p {
  color: black;
}
/*.button2 {border-radius: 4px;}*/



</style>

<body>
<form method="get" action="" >

  <input type="text" name="namesearch" placeholder="name" value="<?php if(isset($_GET['namesearch'])) echo $_GET['namesearch']; ?>">
  <input type="tel" name="nosearch" placeholder="phone no" value="<?php if(isset($_GET['nosearch'])) echo $_GET['nosearch']; ?>">
  <input type="submit"   name="submit" value="Search">

</form>



<?php
if($no>0)
{
?>
<br><br><br>
<table>
  <tr>
    <th>Name</th>
    <th>Username</th>
    <th>Gender</th>
    <th>Position</th>
    <th>Dob</th>
    <th>Email</th>
    <th>Phone no:</th>
    <th>Adress</th>
  </tr>

<?php
  while($r=mysqli_fetch_array($res))
  {
?>
<tr>
    <td><?php echo $r['name']; ?></td>
    <td><?php echo $r['un']; ?></td>
    <td><?php echo $r['gender']; ?></td>
    <td><?php echo $r['position']; ?></td>
    <td><?php echo $r['dob']; ?></td>
    <td><?php echo $r['email']; ?></td>
    <td><?php echo $r['phone']; ?></td>
    <td><?php echo $r['address']; ?></td>
    
     <td><a href="updateadmin.php?un=<?php echo $r[7]; ?>" >UPDATE</a>  </td>
      <td><a href="deluser.php?un=<?php echo $r[7]; ?>" onClick="return check()">DELETE</a></td>
   <!-- <td>
      <a href=<?php //echo "'updateadmin.php?un=" .$r[7]."'"; ?>>
       Update
      </a> 
    </td>-->
</tr>
<?php
  }
?>
</table>

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
<script>
function check()
{
  var a = confirm("Are you sure?");
  if(a==true)
  {
    return true;
  }
  else
  {
    return false;
  }
}
</script>
</html>
