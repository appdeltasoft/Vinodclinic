<?php
   include("db_conn.php");
   include("session.php");


	$id = $_GET['id'];

	$sql = "SELECT * FROM tbl_pat WHERE id='$id'"; 
	$result=mysqli_query($con, $sql);
	$r=mysqli_fetch_array($result);
	
	//$date = $r['dob']->format('Y-m-d');
	$date=$r['dob'];
	$date=explode('-', $date);
	


	 if($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = mysqli_real_escape_string($con,$_POST['name']);
        $gender = mysqli_real_escape_string($con,$_POST['gender']);
        $yearOfBirth = mysqli_real_escape_string($con,$_POST['yearOfBirth']);
        $monthOfBirth = mysqli_real_escape_string($con,$_POST['monthOfBirth']); 
        $dateOfBirth = mysqli_real_escape_string($con,$_POST['dateOfBirth']);
        // Validate
            if ($yearOfBirth != '' && $monthOfBirth != '' && $dateOfBirth != '') {
        // Generate date of birth in format of YYYY-mm-dd
            $date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
  
            }

        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phone_no = mysqli_real_escape_string($con,$_POST['phone']);
        $address = mysqli_real_escape_string($con,$_POST['address']);
         


        //$sql="INSERT INTO `receptionist_tb`(`name`, `gender`, `dob`, `email`, `phone_no`, `address`, `position`,`username`, `password`) VALUES('$name','$gender','$date','$email','$phone_no','$address','receptionist','$username','$password')";
        
        $sql="UPDATE `tbl_pat` SET `name`='$name',`gender`='$gender',`dob`='$date',`email`='$email',`phone`='$phone_no',`address`='$address' WHERE id='$id'";
       
        $result=mysqli_query($con,$sql); 
        //echo "after query";
        header("location:viewpt.php");
    }

 ?>

 <html>
<head>
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


.form-head {
    color: #191919;
    font-weight: normal;
    font-weight: 400;
    margin: 0;
    text-align: center;    
    font-size: 1.8em;
}



.success-message {
    padding: 7px 10px;
    background: #cae0c4;
    border: #c3d0b5 1px solid;
    color: #027506;
    border-radius: 4px;
    margin: 30px 0px 10px 0px;
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

</style>
<body>

    <form name="repUpdation" method="post" >
        <div class="demo-table">
        
            

        <center><h1>Updation</h1></center>
        
            <div class="field-column">
                <label><b>Name</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="name"
                        value=<?php echo "'".$r['name']."'"; ?> required>
                </div>
            </div>

            <div class="field-column">
                <label><b>Gender</b></label>
                <div>
                	<?php
                		if ($r['gender']=="male") {
                	?>
                			<input type="radio" name="gender" value="male" checked="checked" required>Male
                		
                			<input type="radio" name="gender" value="female" required>Female
                	<?php
                		}
                		else{
                	?>
                    		<input type="radio" name="gender" value="male"  required>Male
                			<input type="radio" name="gender" value="female" checked="checked" required>Female
                	<?php
                		}
                		
                    
                    ?>
                </div>
            </div>


            <div class="field-column">
                <label><b>DOB</b></label>
                <div>
                    <select name="yearOfBirth">
                        <option value=<?php echo "'".$date[0]."'"; ?> >
                        	<?php echo $date[0]; ?>
                        </option>
                        <?php for ($i = 1970; $i < date('Y'); $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>

                    <select name="monthOfBirth">
                        <option value=<?php echo "'".$date[1]."'"; ?> >
                        	<?php echo $date[1]; ?>
                        </option>
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="dateOfBirth">
                        <option value=<?php echo "'".$date[2]."'"; ?> >
                        	<?php echo $date[2]; ?>
                        </option>
                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>


            <div class="field-column">
                <label><b>Email</b></label>
                <div>
                    <input type="email" class="demo-input-box"
                        name="email"
                        value=<?php echo "'".$r['email']."'"; ?> >
                </div>
            </div>


            <div class="field-column">
                <label><b>Phone Number</b></label>
                <div>
                    <input type="tel" class="demo-input-box"
                        name="phone"
                        value=<?php echo "'".$r['phone']."'"; ?> required>
                </div>
            </div>

            <div class="field-column">
                <label><b>Address</b></label>
                <div>
                    <textarea name="address" id="textarea" cols="51" rows="6" required>
                    	<?php echo $r['address']; ?>
                    </textarea>
                </div>
            </div>
                <div>
                    <input type="submit"
                        name="button" value="Update"
                        class="btnRegister">
                </div>
            
        </div>
    </form>
</body>
</html>