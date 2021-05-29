<?php
include("session.php");?>
<html>
<head>
<title>Edit Patient Details</title>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body bgcolor="#FFFFFF"><center><img src="rec.png" width="100">
    <img src="pic.png" ></center>
    
    
    
<style type="text/css">
    body {
    font-family: Arial;
    color: #333;
    font-size: 0.95em;
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
</style>
<body>

    <form name="repRegistration" method="post" action="upptpro.php">
        <div class="demo-table">
        

</head>

 
    <form method="post" action="upptpro.php">
        <dl>
            <dt>
                Name
            </dt>
                <dd>
                    <input type="text" name="newname"  value="" required />
                </dd>
        </dl>

        <dl>
            <dt>
                Gender
            </dt>
                <dd>
                   <input type="radio" name="gender" value="Male"/>Male </input>
                    <input type="radio" name="gender" value="Female"/>Female</input> 
                </dd>
        </dl>

         <dl>
            <dt>
                Dob
            </dt>
                <dd>
                        <select name="yearOfBirth">
                        <option value="">---Select year---</option>
                        <?php for ($i = 1970; $i < date('Y'); $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>

                    <select name="monthOfBirth">
                        <option value="">---Select month---</option>
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="dateOfBirth">
                        <option value="">---Select date---</option>
                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </dd>
        </dl>


        <dl>
            <dt>
                Email
            </dt>
                <dd>
                    <input type="email" name="newemail"  value=""  required />
                </dd>
        </dl>


        <dl>
            <dt>
                Phone number
            </dt>
                <dd>
                    <input type="int" name="newno" value="" required />
                </dd>
        </dl>
 
 <dl>
            <dt>
                Address
            </dt>
                <dd>
                    <input type="text" name="newad" value="" required />
                </dd>
        </dl>



        <p align="center">
            <input type="submit" class="btn" value="Reset" name="reup" />
        </p>
    </form>
    </fieldset>
</body>
</html>