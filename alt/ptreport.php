<?php
include("db_conn.php");
include("session.php"); 
   // session_start();

   $id = $_GET['id'];

   $sql1 = "SELECT * FROM tbl_pat WHERE id='$id'";
   $result1=mysqli_query($con, $sql1);
    $r1=mysqli_fetch_array($result1);
    $sql = "SELECT * FROM tbl_med WHERE id='$id'"; 
    $result=mysqli_query($con, $sql);
    $r=mysqli_fetch_array($result);
     $no=mysqli_num_rows($result);

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

$name=$_POST['name'];
$comp=$_POST['comp'];
$ape=$_POST['ape'];
$thi=$_POST['thi'];
$bow=$_POST['bow'];
$uri=$_POST['uri'];
$swe=$_POST['swe'];
$sle=$_POST['sle'];
$ther=$_POST['ther'];
$tos=$_POST['tos'];
$key=$_POST['key'];
$id=$_POST['id'];
$age=$_POST['dob'];
$loh=$_POST['loh'];
$fh=$_POST['fh'];
$mh=$_POST['mh'];
$pato=$_POST['pato'];
$pres=$_POST['pres'];
$amount=$_POST['amount'];
$mrno=$_POST['mrno'];






 if ($no>0){

             // $sql2="UPDATE `tbl_med` SET `name`='$name', `id`='$id', `age`='$age', `comp`='$comp', `ape`='$ape', `thi`='$thi', `bow`='$bow', `uri`='$uri', `swe`='$swe', `sle`='$sle', `ther`='$ther', `tos`='$tos', `key`='$key', `health`='$health', `loh`='$loh', `mh`='$mh', `pato`='$pato', `pres`='$pres' WHERE id='$id'";

        
   $sql2="UPDATE `tbl_med` SET `name`='$name', `id`='$id',  `mrno`='$mrno',`age`='$age', `comp`='$comp', `ape`='$ape', `thi`='$thi', `bow`='$bow', `uri`='$uri', `swe`='$swe', `sle`='$sle', `ther`='$ther', `tos`='$tos',`key`='$key', `loh`='$loh', `fh`='$fh', `mh`='$mh', `pato`='$pato' WHERE id='$id'";
       
            $result=mysqli_query($con,$sql2);

             

 }
else {
        

          $sqli= "INSERT INTO `tbl_med`(`name`, `id`, `mrno`,`age`, `comp`, `ape`, `thi`, `bow`, `uri`, `swe`, `sle`, `ther`, `tos`, `key`, `loh`, `fh`, `mh`, `pato`) VALUES ('$name','$id','$mrno','$age','$comp','$ape','$thi','$bow','$uri','$swe','$sle','$ther','$tos','$key','$loh','$fh','$mh','$pato')";

        $result=mysqli_query($con,$sqli);



   
       // $sqli="INSERT INTO tbl_med  VALUES ('$name','$id','$age','$comp','$loh','$fh','$mh','$ape','$thi','$bow','$uri','$swe','$sle','$ther','$tos','$pato','$key','$pres')";

        // $result=mysqli_query($conn,$sqli);
        //echo "after query";
     }
        header("location:docpat.php");

    
}

?>
<html>
<head>
<title>Patient Details</title>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
    body {
    font-family: Arial;
    color: #333;
    font-size: 0.95em;
    background-image: url("bl-gr.jpg");
    background-size: 1365px 1000px;
    }


.error-message {
    padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: #d6001c;
    border-radius: 4px;
    margin: 30px 0px 10px 0px;
}

.demo-table {
    background: #ffffff;
    border-spacing: initial;
    margin: 15px auto;
    word-break: break-word;
    table-layout: auto;
    line-height: 1.8em;
    color: #333;
    border-radius: 4px;
    padding: 20px 40px;
    width: 1000px;
    border: 1px solid;
    border-color: #e5e6e9 #dfe0e4 #d0d1d5;
}

.demo-table .label {
    color: #888888;
}

.demo-table .field-column {
    padding: 15px 0px;
}

.demo-input-box {
    padding: 13px;
    border: #CCC 1px solid;
    border-radius: 4px;
    width: 90%;
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

 
.maincontent{
    float: left;
    width: 300px;
    padding: 20px;
}

.seccontent{
    float: right;
    width: 400px;
    padding: 20px;
}

.success-message {
    padding: 7px 10px;
    background: #cae0c4;
    border: #c3d0b5 1px solid;
    color: #027506;
    border-radius: 4px;
    margin: 30px 0px 10px 0px;
}
#btnpre{
    width: 100px;
}

#prelab{
    margin-bottom: 10px;
}
.link{
    text-decoration: none;
    color: purple;
    cursor: pointer;
}



</style>
<body>          
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
      echo "Not-entered";
    }
   else{
       return 0;
   }
 }

if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>  
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}
?>


    
    <form name="repRegistration" method="post" action="">
        <div class="demo-table">
        <button onclick="docpat.go(-1);">Back </button>
        <center><h1>Case Record</h1></center>
        
        
        <div class="maincontent">
         <div class="field-column">
                <label><b>Name</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="name" value=<?php echo "'".$r1['name']."'"; ?> disabled> 
                 </div>
            </div>

            <div class="field-column">
                <label><b>Age</b></label>
                <div>
                    <input  class="demo-input-box"
                        name="dob" value=<?php echo ageCalculator($r1['dob']); ?> disabled> 
                 </div>
            </div>

            <div class="field-column">
                <label><b>MR NO.</b></label>
                <div>
                    <input  class="demo-input-box"
                        name="mrno"  value=<?php echo "'".$r1['mrno']."'"; ?> >
                </div>
            </div>



            <div class="field-column">
                <label><b>Presenting Complaints</b></label>
                <div>
                    <textarea name="comp" id="textarea" cols="45" rows="8" >
                     <?php echo $r['comp']; ?>   
                    </textarea>
                </div>
            </div>



            <div class="field-column">
                <label><b>Appetite</b></label>
                <div>
                    <input type="text" class="demo-input-box" 
                        name="ape" value=<?php echo "'".$r['ape']."'"; ?> >
                         
                 </div>
            </div>

            <div class="field-column">
                <label><b>Thirst</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="thi"  value=<?php echo "'".$r['thi']."'"; ?> > 
                        <!-- value=<?php /*echo "'".$r['thi']."'";*/ ?> -->
                </div>
            </div>


            <div class="field-column">
                <label><b>Bowels</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="bow"  value=<?php echo "'".$r['bow']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                <label><b>Urine</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="uri"  value=<?php echo "'".$r['uri']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                <label><b>Sweat</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="swe" value=<?php echo "'".$r['swe']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                <label><b>Sleep</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="sle" value=<?php echo "'".$r['sle']."'"; ?>  >
                </div>
            </div>

            <div class="field-column">
                <label><b>Thermal Reaction</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="ther"  value=<?php echo "'".$r['ther']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                
               <a class="link" href="gallery.php?id=<?php  echo $r1['id']; ?>" target="_blank" ><label id="prelab" style="text-decoration: none;"> View <b>Image</b></label></a>&nbsp<i class="fa fa-camera-retro fa-2x"></i>


               <!-- <button id="btnpre" title="view/edit"><a href="ptreportview.php?id=<?php  //echo $r[1]; ?>" ><img title="History"  src="history.png" width="35px" height="35px"></a></button> <label id="prelab"> view/edit <b>PRESCRIPTION</b></label></td>
 -->
                <!-- <div>
                    <textarea name="pres" id="textarea" cols="51" rows="15" >
                        
                    </textarea>
                </div> -->
            </div>

              
        </div>
            
        
        <div class="seccontent">


            <div class="field-column">
                
              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <td><a class="link" href="pres.php?id=<?php  echo $r1['id']; ?>" target="_blank" ><label id="prelab" style="text-decoration: none;"> view/edit <b>PRESCRIPTION</b></label></a>     

                <!-- <img title="History"  src="history.png" width="35px" height="35px"> -->


               <!-- <button id="btnpre" title="view/edit"><a href="ptreportview.php?id=<?php // echo $r[1]; ?>" ><img title="History"  src="history.png" width="35px" height="35px"></a></button> <label id="prelab"> view/edit <b>PRESCRIPTION</b></label></td>
 -->
                <!-- <div>
                    <textarea name="pres" id="textarea" cols="51" rows="15" >
                        
                    </textarea>
                </div> -->
            </div>




            <div class="field-column">
                <label><b>ID</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="id" value=<?php echo "'".$r1['id']."'"; ?> >
                </div>
            </div>

            <!-- <div class="field-column">
                <label><b>Age</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="age" value=<?php //echo "'".ageCalculator($r1['dob'])."'"; ?> >
                </div>
            </div> -->



            <div class="field-column">
                <label><b>Totality of Symptoms</b></label>
                <div>
                    <textarea name="tos" id="textarea" cols="51" rows="6" >
                     <?php echo $r['tos']; ?>    
                    </textarea>
                </div>
            </div>

            
            <div class="field-column">
                <label><b>Level of Health</b></label>
                <div>
                    <textarea name="loh" id="textarea" cols="51" rows="6" >
                     <?php echo $r['loh']; ?>   
                    </textarea>
                </div>
            </div>

            <div class="field-column">
                <label><b>Family History</b></label>
                <div>
                    <textarea name="fh" id="textarea" cols="51" rows="6" >
                     <?php echo $r['fh']; ?>  
                    </textarea>
                </div>
            </div>

            <div class="field-column">
                <label><b>Menstrual History</b></label>
                <div>
                    <textarea name="mh" id="textarea" cols="51" rows="6" >
                     <?php echo $r['mh']; ?>   
                    </textarea>
                </div>
            </div>

            <div class="field-column">
                <label><b>Pathology</b></label>
                <div>
                    <textarea name="pato" id="textarea" cols="51" rows="7" >
                     <?php echo $r['pato']; ?>  
                    </textarea>
                </div>
            </div>



            <div class="field-column">
                <label><b>Keynote of Prescribing</b></label>
                <div>
                    <textarea name="key" id="textarea" cols="51" rows="6" >
                     <?php echo $r['key']; ?>  
                    </textarea>
                </div>
            </div>




            
           
          

        </div>



            
                <div>
                    <input type="submit"
                        name="button" value="Submit" 
                        class="btnRegister">
                </div>
            
        
        </div>
    </form>
</body>




</html>
