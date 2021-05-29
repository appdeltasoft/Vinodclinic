<?php
include("db_conn.php");
include("session.php");
// this page work only if a patient exist
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        .non {
            background-color: white; 

        }



        .bt {
            padding: 13px;
            float: right;
            background-color: #5d9cec;
            color: #f5f7fa;
            cursor: pointer;
            border-radius: 4px;
            width: 30%;
            border: #5791da 1px solid;
            font-size: 1.1em;

        }


        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        #label {
            /*margin-bottom: 100px;*/
            font-family: monospace;
            font-weight: bold;
        }

        #btn {
            padding: 13px;
            float: right;
            background-color: #5d9cec;
            color: #f5f7fa;
            cursor: pointer;
            border-radius: 4px;
            width: 40%;
            border: #5791da 1px solid;
            font-size: 1.1em;

        }

        .demo-input-box {
            padding: 13px;
            border: #CCC 1px solid;
            border-radius: 4px;
            width: 38%;
        }
    </style>

</head>
<!-- <body bgcolor="#FFFFFF"><center><img src="doco.png" width="100"> -->
    <!-- <img src="pic.png" ></center> -->
    <center>
        <h3>Prescription Report</h3>
    </center>
    <hr>
    <?php
    $id = $_GET['id'];
    $sql2 = mysqli_query($con, "SELECT * FROM tbl_med WHERE id='$id'");
    $r2 = mysqli_fetch_array($sql2);
    $n2 = mysqli_num_rows($sql2);

    if ($n2 > 0) {

        $comp = $r2['comp'];
        $ape = $r2['ape'];
        $thi = $r2['thi'];
        $bow = $r2['bow'];
        $uri = $r2['uri'];
        $swe = $r2['swe'];
        $sle = $r2['sle'];
        $ther = $r2['ther'];
        $tos = $r2['tos'];
        $key = $r2['key'];
        $age = $r2['age'];
        $loh = $r2['loh'];
        $fh = $r2['fh'];
        $mh = $r2['mh'];
        $pato = $r2['pato'];
    }


    $sql = mysqli_query($con, "select * from `pres` WHERE id='$id' ORDER BY ts DESC LIMIT 1");

    while ($r = mysqli_fetch_array($sql)) {
        $name = $r['name'];
        $pre = $r['pres'];
        $date = $r['ts'];
        $dname = $r['dname'];
        $follow = $r['follow'];
    }

    ?>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td>
                    <div id="label"><label><b> Name</b></label></div>
                </td>
                <td>
                    <b> <?php echo $name; ?> </b>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>                                                                                        <!--   row starting-->
                <td>
                    <div id="label"><label> Previous Prescription</label></div>
                </td>
                <td>
                    <?php echo $pre; ?>
                    <button type="button" class="bt"  data-toggle="modal" data-target="#myModal">History</button>      
                </td>    
                <td>
                    <!-- model of history -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <table align="center">
                                    <tr>
                                    <center>
                                        <h3> History</h3>
                                    </center>
                                    <hr>
                                    <td>
                                        <?php
                                        $id = $_GET['id'];
                                        $sql = "select * from pres WHERE id='$id'ORDER BY ts DESC";
                                        $res = mysqli_query($con, $sql);
                                        $no = mysqli_num_rows($res);
                                        if ($no > 0) {
                                            while ($r = mysqli_fetch_array($res)) {
                                                ?>
                                                   
                                                        <tr>
                                                            <td>Date/Time</td>
                                                            <td>Prescription</td>
                                                            <td>Follow Up</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td><?php echo $r['ts']; ?></td>
                                                            <td><?php echo $r['pres']; ?></td>
                                                            <td><?php echo $r['follow']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>********************</td>
                                                            <td>***********************</td>
                                                        </tr>
                                                   
                                                    <?php
                                                }
                                                ?>
                                            
                                            <?php
                                        } 
                                        else {
                                            ?>
                                            <p><center> <?php echo "No Records!!!!!!!!"; ?></center></p>
                                            <?php
                                        }
                                        ?>


                                    </td>

                                    
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>
                        <div id="label"><label><b> Add New Prescription </b></label></div>
                    </td>
                    <td>
                        <textarea name="pres" id="textarea" cols="51" rows="6"></textarea>
                    </td>
                </tr>
                <tr >
                    <td>
                        <div id="label"><label> Previous follow up</label></div>
                    </td>
                    <td>
                        <?php echo $follow; ?>
                        <button type="button" class="bt"  data-toggle="modal" data-target="#myModals">History</button> 
                    </td>
                    <td>
                        <div class="modal fade" id="myModals" role="dialog">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <table align="center">
                                        <center>
                                            <div>
                                               <h3>Follow up History</h3> 
                                           </div>
                                       </center>
                                       <hr>
                                       <?php
                                       $id = $_GET['id'];
                                       $sql = "select * from pres WHERE id='$id'ORDER BY ts DESC";
                                       $res = mysqli_query($con, $sql);
                                       $no = mysqli_num_rows($res);
                                       if ($no > 0) {
                                        while ($r = mysqli_fetch_array($res)) {
                                            ?> 
                                            
                                                <tr>
                                                    <td>Follow up</td>
                                                    <td><?php echo $r['follow']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Date/Time</td>
                                                    <td><?php echo $r['ts']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>********************</td>
                                                    <td>***********************</td>
                                                </tr>
                                        
                                        <?php
                                    }
                                    ?>
                                    <?php
                                } else {
                                    ?>
                                    <p><center> <?php echo "No Records!!!!!!!!"; ?></center></p>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <!-- <table align="center" > -->
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <div id="label"><label>Follow Up</label></div> </td>
                    <td><textarea name="follow" id="textarea" cols="51" rows="6" <?php echo $follow; ?>></textarea></td>
                </tr>
                <tr>
                    <td>
                        <div id="label"><label> Amount</label></div>
                    </td>
                    <td>
                        <!--  <textarea name="amount" id="textarea" cols="51" rows="2" ></textarea> -->

                        <input type="number" class="demo-input-box" required="" name="amount">

                        <button type="button" class="bt"  data-toggle="modal" data-target="#myModal2"> Bill History</button> 

                    </td>
                    <td>
                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 </div>
                                 <table align="center" >
                                    <center>
                                        <div>
                                            <h3>Bill History</h3> 
                                        </div>   
                                    </center>
                                    <hr> 
                                    <?php
                                    $id=$_GET['id'];
                                    $tamount=0;
                                    $que=mysqli_query($con,"SELECT * FROM `tbl_pat` WHERE  `id`='$id'");
                                    $query=mysqli_query($con,"SELECT * FROM `pres` WHERE `id`='$id'");
                                    $no=mysqli_num_rows($que);
                                    $no_pres=mysqli_num_rows($query);
                                    if ($no>0) 
                                    {
                                        while($r=mysqli_fetch_array($que)){
                                            $name=$r['name'];

                                        }
                                    }
                                    ?>
                                    <?php

                                    if($no_pres>0)
                                    {
                                        ?>
                                        <br><br>
                                        
                                            <tr colspan='2'>
                                                <th style="color: black">NAME</th><th  style="color: black"><?php echo $name; ?></th></tr>
                                                <tr colspan='2'>
                                                    <th  style="color: black">ID</th><th  style="color: black"><?php echo $id; ?></th></tr>
                                                    <tr><th>Date</th> <th>Amount</th></tr>
                                                    <?php
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                        ?>
                                                        <tr>

                                                            <td><?php echo $row['ts']; ?></td>

                                                            <td><?php echo $row['amount']; $tamount+=$row['amount'];?></td>

                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                    <tr style="border-top: 2px solid black;"><td>Total Amount</td><td><?php echo "$tamount"; ?></td></tr>
                                       
                                                <br> <br><br>

                                                
                                                <?php

                                            }
                                            else
                                            {
                                                ?>
                                                <br><br><br><br>
                                                <p><center> <?php echo "No Records!!!!!!!!"; ?></center></p>

                                                <?php    
                                            }
                                            ?>
                                            
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                <!-- 
                    <table align="center"> -->
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <div id="label"><label> Payment mode :</label></div>
                            </td>
                            <td>        <div><select class="demo-input-box" required="" name="mode" style="width:200px">
                                <option value="none" selected disabled hidden> 
                                Select an Option</option>
                                <option value="CARD">CARD</option>
                                <option value="CASH">CASH</option>
                            </select></div>
                        </td>
                    </tr>
                    <tr>
                        <td><b style="font-family: monospace;">Last Update</b></td>
                        <td><?php echo $date; ?></td>
                    </tr>
                    <tr>
                        <td><b style="font-family: monospace;">Given By</b></td>
                        <td><?php echo $dname; ?></td>
                    </tr>


                    <tr id="non">
                        <td style="background-color: white;"></td>
                        <td style="
                        background-color: white;">
                        <input type="submit" name="presupdate" value="UPDATE" id="btn"></td>
                    </tr>
                    <tr>
                    </tr>



                </table>

            </form>

        </body>

        </html>
        <?php
        $dname = $_SESSION['un'];
        $sql1 = $con->query("SELECT * FROM tbl_pat WHERE id='$id'");
        $r1 = mysqli_fetch_array($sql1);
        $n1 = mysqli_num_rows($sql1);
        $name = $r1['name'];



        if (isset($_POST['presupdate'])) {
            $pres = $_POST['pres'];
            $follow = $_POST['follow'];
            $amount = $_POST['amount'];
            $method = $_POST['mode'];
        }
        $s = $con->query("SELECT * FROM pres WHERE id='$id' AND pres='$pres' and ");
        if ($pres !== null && $amount !== null) {

            if ($n2 > 0) {
                $sql2 = $con->query("UPDATE `tbl_med` SET `name`='$name', `id`='$id', `age`='$age', `comp`='$comp', `ape`='$ape', `thi`='$thi', `bow`='$bow', `uri`='$uri', `swe`='$swe', `sle`='$sle', `ther`='$ther', `tos`='$tos',`key`='$key', `loh`='$loh', `fh`='$fh', `mh`='$mh', `pato`='$pato',`amount`='$amount' ,`pres`='$pres' WHERE id='$id'");
                $sql = $con->query("INSERT INTO `pres`(`name`, `id`, `follow`,`pres`,`ts`,`amount`,`dname`,`payment_type`) VALUES ('$name','$id','$follow','$pres',CURRENT_TIMESTAMP,'$amount','$dname','$method')");
                $pres = null;
                $amount = null;
            } else {
                $sql2 = $con->query("INSERT INTO `tbl_med`(`name`, `id`, `pres`,`amount`) VALUES ('$name','$id','$pres','$amount')");
                $sql = $con->query("INSERT INTO `pres`(`name`, `id`, `follow`,`pres`,`ts`,`amount`,`dname`,`payment_type`) VALUES ('$name','$id','$follow','$pres',CURRENT_TIMESTAMP,'$amount','$dname','$method')");
                $pres = null;
                $amount = null;
                echo $pres;
            }

            if ($sql) {
                if ($sql2) {
                    echo "<script>";
                    echo "alert('Succesfully Added')";
                    echo "</script>";
                    echo "<script>window.close();</script>";
                }
            }
        }


        ?>