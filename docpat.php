 <?php
 include("db_conn.php");
 include("session.php");
   //include("db_conn.php");
   // session_start();

 $no=0;
 $dateOfOneweek=date('Y-m-d', strtotime('-7 days'));
  //echo $currentDate=new DateTime('tomorrow');
 $datetime = new DateTime('tomorrow');
 $currentDate=$datetime->format('Y-m-d');
 $sql = "SELECT * FROM tbl_pat";// where time <= '$currentDate' and time>= '$dateOfOneweek' ORDER BY id DESC ";
 $res=mysqli_query($con,$sql);
 $no=mysqli_num_rows($res);
 if(isset($_POST["submitAju"]))
 {
  $startDate= $_POST["startDate"];
  $endDate= $_POST["endDate"];
  if($_POST["nameSearch"]!="")
  {
    $sql = "SELECT *  FROM `tbl_pat` WHERE `name` LIKE '%".$_POST["nameSearch"]."%' ORDER BY id DESC";
    $res=mysqli_query($con,$sql);
    $no=mysqli_num_rows($res);
    
  }
  else{

    $sql = "SELECT * FROM tbl_pat where time <= '$endDate' and time>= '$startDate' ORDER BY id DESC ";
    $res=mysqli_query($con,$sql);
    $no=mysqli_num_rows($res);

  }
  
}


?>

<!DOCTYPE html>
<html>
<head>
  <center>
    <img src="pic.png" >
  </center> 
  <a href="dochome.php">
    <img class= "top-right1" title="Home" src="home.png" width="50px" height="50px">
  </a>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body bgcolor="#FFFFFF"><center><img src="doco.png" width="100">
  <style>

    .oneline {
     width: 100px;
     height: 100px;
     border: solid 1px #ccc;
     display: inline-block;
   }


   body  {
    background-image: url("bl-gr.jpg");
    background-size: 1365px 700px;
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
    table-layout: fixed;

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

  a{
    text-decoration: none;
  }


</style>
<form action="docpat.php" method="post">
  <table class="table" style="width:100%">
    <tr>
      <!-- <td><input class="form-control" id="myInput" onkeyup="myFunction()" type="text" name="namesearch" placeholder="Name" value="<?php //if(isset($_GET['namesearch'])) echo $_GET['namesearch']; ?>"></td>
        <td><input class="form-control" id="input" onkeyup="filterno()" type="text" name="nosearch" placeholder="Ph No." value="<?php// if(isset($_GET['nosearch'])) echo $_GET['nosearch']; ?>"></td> -->
        <td><input class="form-control"id="startDate" name="startDate" value="<?php if(isset($_POST['startDate'])) echo $_POST['startDate']; ?>" width="276"></td>
        <td><input class="form-control"id="endDate" name="endDate" value="<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>" width="276"></td>
        <td><input class="form-control" id="input" type="text"  width="276" name="nameSearch" placeholder="Name" value="<?php if(isset($_POST['nameSearch'])) echo $_POST['nameSearch']; ?>"></td>
        <td><button class="btn btn-primary" type="submit" name="submitAju">Search</button></td>
      </tr>
    </table>
  </form>

  <?php

  function ageCalculator($dob)
  {
   if(!empty($dob))
   {


     $birthdate = new DateTime($dob);
     $today = new DateTime('today');
     $age = $birthdate->diff($today)->y;
     if ($age<=130){
      echo $age;

    }
    else
      echo "Not entered";



  }
  else{
    return 0;
  }

}


if($no>0)
{
  ?>
</body>
<br><br><br>
<table id="data" class="table table-striped table-bordered" style="width:95%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Mr No.</th>
      <th>Id</th> 
      <th>Age</th> 
      <th>Gender</th>
      <th>Date & Time</th>
      <th>Phone no:</th>
      <th>Case Record</th>
      <th>Image Upload</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
   <?php
   while($r=mysqli_fetch_array($res))
   {
    ?>
    <tr>
      <td><?php echo $r['name']; ?></td>
      <td><?php echo $r['mrno']; ?></td>
      <td><?php echo $r['id']; ?></td> 
      <td><?php echo ageCalculator($r['dob']); ?></td> 
      <td><?php echo $r['gender']; ?></td>
      <td><?php echo $r['time']; ?></td> 
      <!-- <td><?php //echo $r['email']; ?></td> -->
      <td><?php echo $r['phone']; ?></td>
      <!-- <td><?php// echo $r['address']; ?></td> -->
      <td><a href=<?php echo "'ptreport.php?id=" .$r['id']."'"; ?>>Record</a></td>


      <td><a href="uploads.php?id=<?php  echo $r['id']; ?>" ><img title="Upload"  src="up.png" width="25px" height="25px"></a></td> 
      <td><a href="updatedocpat.php?id=<?php echo $r['id']; ?>" >Edit</a></td></td>
      <td><a href="delpat.php?id=<?php echo $r['id']; ?>" onClick="return check()"><img title="Delete"  src="delete.jpg" width="25px" height="25px"></a></td>



    </tr>
    <?php
  }
  ?>

</tbody>
<tfoot>
  <tr>
    <th>Name</th>
    <th>Mr No.</th>
    <th>Id</th> 
    <th>Age</th> 
    <th>Gender</th>
    <th>Date & Time</th>
    <th>Phone no:</th>
    <th>Case Record</th>
    <th>Image Upload</th>
    <th>Delete</th>
  </tr>
</tfoot>
</table>

<?php
}
else
{
  ?>

  <p> <?php echo "No Records!!!!!!!!"; ?></p>
  
  <?php    
}
?>
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" ></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
  /*
  $(document).ready(function () {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

    $('#datepicker').datepicker({

      dateFormat: 'yy-mm-dd'
    });
  });

  $(document).ready(function () {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

    $('#Enddatepicker').datepicker({

      dateFormat: 'yy-mm-dd'
    });
  });

  */
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


  function filterno() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("input");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[5];
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
<script>
  $(document).ready(function() {
    $('#data').DataTable();
    
  } );
</script>
<script>
  var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
  $('#startDate').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd',
    iconsLibrary: 'fontawesome',
    maxDate: function () {
      return $('#endDate').val();
    }
  });
  $('#endDate').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd',
    iconsLibrary: 'fontawesome',
    minDate: function () {
      return $('#startDate').val();
    }
  });
</script>
</body>

</html>