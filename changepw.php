<html>
<head>
<title>Change Password</title>
<style type="text/css">
fieldset {
    width:500px;
    border:5px dashed #CCCCCC;
    margin:0 auto;
    border-radius:5px;
}
 
legend {
    color: blue;
    font-size: 25px;
}
 
dl {
    float: right;
    width: 390px;
}
 
dt {
    width: 180px;
    color: brown;
    font-size: 19px;
}
 
dd {
    width:200px;
    float:left;
}
 
dd input {
    width: 200px;
    border: 2px dashed #DDD;
    font-size: 15px;
    text-indent: 5px;
    height: 28px;
}
 
.btn {
    color: #fff;
    background-color: dimgrey;
    height: 38px;
    border: 2px solid #CCC;
    border-radius: 10px;
    float: right;
}
 
</style>
</head>
<body>
    <fieldset>
        <legend>Change Password</legend>

 
    <form method="post" action="chprocess.php">

        <dl>
            <dt>
                Username
            </dt>
                <dd>
                    <input type="text" name="un" placeholder="Username..." value="" required />
                </dd>
        </dl>
        <dl>
            <dt>
                Old Password
            </dt>
                <dd>
                    <input type="password" name="old_pass" placeholder="Old Password..." value="" required />
                </dd>
        </dl>
        <dl>
            <dt>
                New Password
            </dt>
                <dd>
                    <input type="password" name="new_pass" placeholder="New Password..." value=""  required />
                </dd>
        </dl>
        <dl>
            <dt>
                Retype New Password
            </dt>
                <dd>
                    <input type="password" name="re_pass" placeholder="Retype New Password..." value="" required />
                </dd>
        </dl>
 
        <p align="center">
            <input type="submit" class="btn" value="Reset Password" name="re_password" />
        </p>
    </form>
    </fieldset>
</body>
</html>