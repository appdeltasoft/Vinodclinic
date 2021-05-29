<?php
include("db_conn.php");
include("session.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vinod Clinic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Style the header */
    header {
      background-color: #008577;
      padding: 30px;
      text-align: center;
      font-size: 35px;
      color: white;
      width: auto;
      
    }

    /* Container for flexboxes */
    section {
      display: -webkit-flex;
      display: flex;
    }

    /* Style the navigation menu */
    nav {
      -webkit-flex: 1;
      -ms-flex: 1;
      flex: 1;
      background: #ccc;
      padding: 20px;
    }

    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
    }

    /* Style the content */
    article {
      -webkit-flex: 3;
      -ms-flex: 3;
      flex: 3;
      background-color: #f1f1f1;
      padding: 10px;
      width: 30%;
      height: 510px;
    }

    /* Style the footer */
    footer {
      background-color: #C0C0C0;
      padding: 10px;
      text-align: center;
      color: white;
    }

    /* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
    @media (max-width: 600px) {
      section {
        -webkit-flex-direction: column;
        flex-direction: column;
      }
    }
    .dropbtn {
      background-color: #008577;
      color: black;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: lightgrey;
      min-width: 200px;
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: white;}
    .dropdown:hover .dropdown-content {display: block;}
    .dropdown:hover .dropbtn {background-color: grey;}

    .container {
      position: relative;
      text-align: center;
      color: white;
    }

    .bottom-left {
      position: absolute;
      bottom: 8px;
      left: 16px;
    }
    .top-left {
      position: absolute;
      top: 8px;
      left: 16px;
    }

    .top-right {
      position: absolute;
      top: 8px;
      right: 16px;
    }

    .bottom-right {
      position: absolute;
      bottom: 8px;
      right: 16px;
    }

    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    #notice{
      background-color:#ccc;
    }
    tr:nth-child(even){background-color:#f3f3f3}

  </style>
</head>



<body>
  <header>

    <body bgcolor="#FFFFFF"><center>
     
      <img src="doco.png" width="100">
      <img src="pic.png" ></center>
      
    </header>
    <section>
      <nav>
        <div class="dropdown">
          <button class="dropbtn">Tasks</button>
          <div class="dropdown-content">
            <a href="docpat.php">Patients</a>
            <a href="addpt.php">Add Patients</a>
            <a href="billhistory.php">Billing</a>
            <a href="changepw.php">Change password</a>
            <a href="logout.php">Logout</a>

          </div>

        </div>
        <div id="notice">
          <div class="sidebox">
            <table>
              <br>
              <?php
              $result =$con->query("SELECT * FROM `tbl_pat`  WHERE `dstatus`='Consulted' ORDER BY time DESC LIMIT 6");
              if($result->num_rows > 0) {

                echo "<label style='font-weight: bold;''>Recent Patients:</label>";
                while($rows = $result-> fetch_assoc()) {
                 
                  
                  $name=$rows['name'];
                  $id=$rows['id'];
                  
                  ?>
                  <marquee >
                    <tr style="border-bottom: 2px black;">
                     <i style="padding-left:90px;">
                      <?php
                      echo "<a href='ptreport.php?id=$id' style='color:#000; text-decoration:none;'>&#9658
                      $name</a>";}}
                      
                      ?>
                    </i>
                    
                  </tr>
                </marquee>
              </table>
              
            </div> 

          </nav>
          
          
          <article>

            <div class="container">
              <img src="medi.jpg" alt="firstpic" style="width:100%;">
              
            </div>
            
            
          </article>
        </section>
        <footer>
          <p>Copyright © Deltasoft</p>
        </footer>
      </body>
      </html>


