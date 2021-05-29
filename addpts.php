<?php
 include("db_conn.php");

include("session.php");?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body bgcolor="#FFFFFF"><center><img src="rec.png" width="100">
    <img src="pic.png" ></center> <a href="rechome.php"><img class= "top-right1"src="home.png" width="50px" height="50px"></a>
  
   <!-- <center> <img src="admino.jpg" width=150/></center> -->
    
    
    
<style type="text/css">
    body {
    font-family: Arial;
    color: #333;
    font-size: 0.95em;
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

.form-head {
    color: #191919;
    font-weight: normal;
    font-weight: 400;
    margin: 0;
    text-align: center;    
    font-size: 1.8em;
}

.error-message {
    padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: #d6001c;
    border-radius: 4px;
    margin: 30px 0px 10px 0px;
}

.success-message {
    padding: 7px 10px;
    background: #cae0c4;
    border: #c3d0b5 1px solid;
    color: #027506;
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
    margin-bottom: 650px;
    border-radius: 4px;
    padding: 20px 40px;
    width: 380px;
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
    width: 100%;
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

.response-text {
    max-width: 380px;
    font-size: 1.5em;
    text-align: center;
    background: #fff3de;
    padding: 42px;
    border-radius: 3px;
    border: #f5e9d4 1px solid;
    font-family: arial;
    line-height: 34px;
    margin: 15px auto;
}

.terms {
    margin-bottom: 5px;
}
th {
    background-color: #4CAF50;
    color: white;
    text-align: center;
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

</style>
<body>
<table><tr><td style="width: 50%; border-right: 2px #000;">
    <form name="repRegistration" method="post" action="addptspro.php">
        <div class="demo-table">
        
            
<?php
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
        <center><h1>ADD PATIENTS</h1></center>
        
            <div class="field-column">
                <label><b>Name</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="name"
                        value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required>
                </div>
            </div>

            

            <div class="field-column">
                <label><b>Gender</b></label>
                <div>
                   <input type="radio" name="gender" value="Male"/>Male </input>
                    <input type="radio" name="gender" value="Female"/>Female</input> 
                </div>
            </div>


            <!-- <div class="field-column">
                <label><b>DOB</b></label>
                <div>
                    <select name="yearOfBirth">
                        <option value="">---Select year---</option>
                        <?php //for ($i = 1940; $i < date('Y'); $i++) : ?>
                        <option value="<?php //echo $i; ?>"><?php //echo $i; ?></option>
                        <?php //endfor; ?>
                    </select>

                    <select name="monthOfBirth">
                        <option value="">---Select month---</option>
                        <?php// for ($i = 1; $i <= 12; $i++) : ?>
                        <option value="<?php //echo ($i < 10) ? '0'.$i : $i; ?>"><?php //echo $i; ?></option>
                        <?php //endfor; ?>
                    </select>
                    <select name="dateOfBirth">
                        <option value="">---Select date---</option>
                        <?php //for ($i = 1; $i <= 31; $i++) : ?>
                        <option value="<?php// echo ($i < 10) ? '0'.$i : $i; ?>"><?php //echo $i; ?></option>
                        <?php //endfor; ?>
                    </select>
                </div>
            </div> -->
             <div class="field-column">
                <label><b>Age</b></label>
                <div>
                    <input type="int" class="demo-input-box"
                        name="age"
                        value="<?php if(isset($_POST['age'])) echo $_POST['age']; ?>" >
                </div>
            </div>


            <div class="field-column">
                <label><b>Email</b></label>
                <div>
                    <input type="email" class="demo-input-box"
                        name="email"
                        value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" >
                </div>
            </div>


            <div class="field-column">
                <label><b>Phone Number</b></label>
                <div>
                    <input type="tel" class="demo-input-box" 
                        name="phone"
                        value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" required>
                </div>
            </div>

            <div class="field-column">
                <label><b>Address</b></label>
                <div>
                    <textarea name="address" id="textarea" cols="51" rows="6" required>
                    </textarea>
                </div>
            </div>



            <div class="field-column">
                <label><b>MRNO.</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="mrno"
                        value="<?php if(isset($_POST['mrno'])) echo $_POST['mrno']; ?>" >
                </div>
            </div>
                        
            
                <div>
                    <input type="submit"
                        name="button" value="Register"
                        class="btnRegister">
                </div>
            
        </div>
    </form>
</td><td style="width: 50%;">

    
 <?php
  

   
    //if($_GET['nosearch']=="" AND $_GET['namesearch']==""){
    // if(!isset($_GET['nosearch']) AND !isset($_GET['namesearch'])){
       $sql = "SELECT * FROM `tbl_pat` WHERE dstatus='Ready to meet Doctor?' ORDER BY id DESC LIMIT 20";
        $res=mysqli_query($con,$sql);
        $no=mysqli_num_rows($res);
      // }

?>



   
    
    <?php

    if($no>0)
    {
    ?>
    <table style="margin-left: 10px; margin-top: -710PX;">
    <tr>
    <th>Name</th>
    <th>id</th>
    <th>status</th>
    
    </tr>
    <?php
    while($r=mysqli_fetch_array($res))
    {
        $pre= $r['pres'];
        $dstatus= $r['dstatus'];
        $name= $r['name'];
        $id= $r['id'];
        
    ?>
    <tr style="border-bottom: 2px grey;">
    <td style="text-align: center;"><?php echo $name; ?></td>
    <td style="text-align: center;"><?php echo $id; ?></td>
    <td style="text-align: center;"><?php echo $dstatus; if ($dstatus=="Ready to meet Doctor?" ) {echo "
    <a href='updstst.php?name=$name&amp;id=$id' style='text-decoration: none; font-weight: bold;'> yes! </a>";}?> </td>
    
    </tr>
    <?php
    }
    ?>
    </table>
    <?php
    }
    else
    {
        // echo "No Records!!!!!!!!";
    }
    ?>
    
       




</td></tr></table>
</body>
</html>
