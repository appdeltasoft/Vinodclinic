<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

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




</style>

<body>

<br><br><br><br>
<form name="Forget Password" method="post" action="forgotpro.php" >
        <div class="demo-table">

        <center><h1>Forgot Password</h1></center>
        
            <div class="field-column">
                <label><b>Username</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="username"  required>
                </div>
            </div>


            <div>
                    <input type="submit"
                        name="button" value="Send Mail" onClick= "confirmDeletion()"
                        class="btnRegister">
                </div>
 
</div>
</form>
 </body>
 </html>