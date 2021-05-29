<?php
include("session.php");?>
    <html>
    <head></head>
    <body bgcolor="#FFFFFF"><center><img src="admina.png" width="100">
    <img src="head.jpg" ></center>
   <center> <img src="admino.jpg" width=150/></center>
      <h3><b>Send Email</h3>
  <hr>
    <?php
	$email=$_GET["email"];
	?>
    <form name="form1" method="post" action="sendemailpro.php">
      <table width="200" border="1">
        <tr>
          <td>To</td>
          <td><input type="text" name="mto" id="textfield" value="<?php echo $email;?>" readonly></td>
        </tr>
        <tr>
          <td>From</td>
          <td><input type="text" name="mfrom" id="textfield2" value="Vinodclinic@gmail.com"></td>
        </tr>
        <tr>
          <td>Subject</td>
          <td><input type="text" name="subject" id="textfield3"></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><textarea name="msg" id="textarea" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Send"></td>
        </tr>
      </table>
    </form>
    </body>
    </html>
 