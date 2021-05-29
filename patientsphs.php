 <?php
 include("db_conn.php");
 include("session.php");
   //include("db_conn.php");
   // session_start();

//  $no=0;

//  if(isset($_GET['submit'])){
//     //  $name=$_GET['namesearch'];
//    $phno=$_GET['nosearch'];
//    if($_GET['nosearch']==""){
//     $sql = "SELECT * FROM pres ORDER BY ts DESC";
//   }
//   else if($_GET['nosearch']!="" ){
//    $sql = "SELECT * FROM pres WHERE id = '$phno' ORDER BY ts DESC";

//  }

//  $res=mysqli_query($con,$sql);
//  $no=mysqli_num_rows($res);

// }


// if(!isset($_GET['nosearch'])){
//  $sql = "SELECT * FROM pres ORDER BY ts DESC";
//  $res=mysqli_query($con,$sql);
//  $no=mysqli_num_rows($res);
// }

$no=0;
  $dateOfOneweek=date('Y-m-d', strtotime('-2 days'));
  $datetime = new DateTime('tomorrow');
  $currentDate=$datetime->format('Y-m-d');
  $sql = "SELECT * FROM pres where ts <= '$currentDate' and ts>= '$dateOfOneweek' ORDER BY id DESC ";
  $res=mysqli_query($con,$sql);
  $no=mysqli_num_rows($res);
  if(isset($_POST["submitAju"]))
  {
      $startDate= $_POST["startDate"];
      $endDate= $_POST["endDate"];
      if($_POST["nameSearch"]!="")
      {
          $sql = "SELECT *  FROM `pres` WHERE `name` LIKE '%".$_POST["nameSearch"]."%' ORDER BY id DESC";
          $res=mysqli_query($con,$sql);
          $no=mysqli_num_rows($res);
     
      }
      else{

          $sql = "SELECT * FROM pres where ts <= '$endDate' and ts>= '$startDate' ORDER BY id DESC ";
          $res=mysqli_query($con,$sql);
          $no=mysqli_num_rows($res);

      }
  }



?>

<!DOCTYPE html>
<html>
<head>
  <body bgcolor="#FFFFFF"><center><img src="rec.png" width="100">
    <img src="pic.png" ></center> <a href="rechome.php"><img class= "top-right1"src="home.png" width="50px" height="50px"></a>
    <!-- <center> <img src="admino.jpg" width=150/></center> -->
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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



  </style>

  <body>
    <form action="patientsphs.php" method="post">
    <table class="table" style="width:100%">
      <tr>
        <td><input class="form-control"id="startDate" name="startDate" width="276"></td>
        <td><input class="form-control"id="endDate" name="endDate" width="276"></td>
         <td><input class="form-control" id="input" type="text"  width="276" name="nameSearch" placeholder="Name" value="<?php if(isset($_POST['nameSearch'])) echo $_POST['nameSearch']; ?>"></td>
        <td><button class="btn btn-primary" type="submit" name="submitAju">Search</button></td>
      </tr>
    </table>
  </form>



    <!-- <h3>Patients</h3> -->
    
    <?php

    if($no>0)
    {
     ?>
     <br><br><br>
  <table id="data" class="table table-striped table-bordered" style="width:95%">
  <thead>
  <tr>
        <th>Name</th>
        <th>id</th>
        <th>Mr No.</th>
        <th>Date/Time</th>
        <th>Prescription</th>
        <th>Amount</th>
        <th>Payment Method</th>
        <th>Med. Status</th>

      </tr>
  </thead>
  <tbody>
      <?php
      while($r=mysqli_fetch_array($res))
      {
        $pre= $r['pres'];
        $status= $r['status'];
        $name= $r['name'];
        $id= $r['id'];
        $amount=$r['amount'];
        $method=$r['payment_type'];

        
        ?>
        <tr style="border-bottom: 2px grey;">
          <td><?php echo $name; ?></td>
          <td><?php echo $id; ?></td>
          <td><?php echo $r['mrno']; ?></td>
          <td><?php echo $r['ts']; ?></td>
          <!-- <td><?php //echo $r['key']; ?></td> -->
          <td><?php echo $pre; ?></td>
          <td><?php echo $amount;?></td>
          <td><?php echo $method;?></td>
          <td><?php echo $status; if ($r['status']=="Not Delivered" ) {echo "
          <a href='medrecsts.php?name=$name&amp;id=$id' style='text-decoration: none; font-weight: bold;''>  mark as delivered</a>";}?></td>

        </tr>
        <?php
      }
      ?>
    </tbody>
<tfoot>
  <tr>
      <th>Name</th>
      <th>Mr No.</th>
      <th>Age</th> 
      <th>Phone no:</th>
      <th>Adress</th>
      <th>Status</th>
      <th>Edit</th>
      <th>Payments</th>
    </tr>
  </tfoot>
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
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" ></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

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
