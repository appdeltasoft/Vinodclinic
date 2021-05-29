<!DOCTYPE html>
<html>
<head>
  <title>Vinod Clinic</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
img {vertical-align: middle;}

/* Slideshow container  https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto*/
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
}

.mySlides img{
  filter: brightness(50%);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
/*.fade {*/
  /*-webkit-animation-name: fade ;*/
  /*-webkit-animation-duration: 1.5s;*/
  /*animation-name: fade;*/
  /*animation-duration: 1.5s;*/
/*}*/

/*@-webkit-keyframes fade {*/
  /*from {opacity: .4} */
  /*to {opacity: 1}*/
/*}*/

/*@keyframes fade {*/
  /*from {opacity: .4} */
  /*to {opacity: 1}*/
/*}*/

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

body { 
  height: 100%;
  margin: 0;
  
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  font-family: "Times New Roman", Times, serif;
}

.header {
  overflow: hidden;
  background-color:white;
  /*#008577*/
  padding: 0px 10px;
  height: 110px;

}

@media only screen and (max-width: 300px) {
  .header {width: 150px;
  height: 80px; }
}

   /* #cacaca #f1f1f1 #b5cff1    #edf3fb*/


.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
}




.active:hover {
  background-color: #ddd;
}

.header a.active {
  background-color: #8cd246;
  /*cornflowerblue*/
  color: black;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

}

.btn {

  position: absolute;
  top: 40%;
  left: 44%;

  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #008577;
  border: none;
  border-radius: 30px;
  /*box-shadow: 0 9px #999;*/
}

button:hover {background-color: #3e8e41}

button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

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
  border-radius: 30px;
}

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
  width: 40%; /* Could be more or less, depending on screen size */
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
<body  >

<div class="header">
  <img src="pic1.png" alt="firstpic" width="400" height="130" align="left">
 
  <!-- <div class="header-right"> -->
    <!-- <br><br> -->
    <!-- <a  href="index.php"><b>Home</a> -->
    <!-- <a  href="about.php"><b>About</a> -->
    <!-- <a  href="contact.php"><b>Contact us</a> -->
     <!-- <a class="active" href="login.php"><b>Login</a> -->
  <!-- </div> -->
</div>


<!-- <img src="homeo.jpg" alt="firstpic" width="1362" height="585"> -->

<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="homeo.jpg"  style="align: center; height: 500px; width: 100%;">
    <!-- <div class="text">Caption Text</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="flowe.jpg" style="align: center; height: 500px; width: 100%;">
    <!-- <div class="text">Caption Two</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="med.jpg" style="align: center; height: 500px; width: 100%;">
    <!-- <div class="text">Caption Three</div> -->
  </div>

   <button class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

</div>

  <br>

<div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
</div>

<div class="footer">
  <p>Copyright © Deltasoft</p></div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="loginprocess.php">
    <div class="imgcontainer">
      <img src="login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
    
        <label for="un"><b>Username</b></label>
      <input type="text" placeholder="Username" name="un" required>

      <label for="pw"><b>Password</b></label>
      <input type="password" placeholder="Password" name="pw" required>
        
      <button type="submit" class="butstyle">Login</button>
      
    </div>

    <!-- <div class="container" style="background-color:#f1f1f1"> -->
      <!-- <center><a href="forget.php">Forget Password?</a></center> -->
    
    <!-- </div> -->
  </form>
</div>



<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
  }

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


