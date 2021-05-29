<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.butstyle {
  background-color: #008577;
  color: white;
  padding: 15px 30px;
  margin: 8px 0px;
  border: none;
  cursor: pointer;
  width: 100%;
  /*border-radius: 30px;*/
}

body{
  background-image: url("flowe.png");
}


button{
  padding: 0px 0px;
  margin: 0px;
  outline: none;
  border:none;
}


button:hover {
  opacity: 0.8;
}





/* Extra styles for the cancel button */


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
</head>
<body >
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><img src="log.png" class="right" width="150px" height="100px"></button></center>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="loginprocess.php">
    <div class="imgcontainer">
      <img src="login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
    
        <label for="un"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="un" required>

      <label for="pw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pw" required>
        
      <button type="submit" class="butstyle">Login</button>
      
    </div>

    <!-- <div class="container" style="background-color:#f1f1f1"> -->
      <!-- <center><a href="forget.php">Forget Password?</a></center> -->
    
    <!-- </div> -->
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>