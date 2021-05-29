<?php
include("session.php");?>
<html>
<head>
<title>Patient Details</title>
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
    width: 1000px;
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
    width: 90%;
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

 
.maincontent{
    float: left;
    width: 300px;
    padding: 20px;
}

.seccontent{
    float: right;
    width: 400px;
    padding: 20px;
}

.success-message {
    padding: 7px 10px;
    background: #cae0c4;
    border: #c3d0b5 1px solid;
    color: #027506;
    border-radius: 4px;
    margin: 30px 0px 10px 0px;
}






</style>
<body>          
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


    
    <form name="repRegistration" method="post" action="reppro.php">
        <div class="demo-table">
        
        <center><h1>Case Record</h1></center>
        
        <div class="maincontent">
         <div class="field-column">
                <label><b>Name</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="name" value=<?php echo "'".$r1['name']."'"; ?>
                         required> 
                 </div>
            </div>

            <div class="field-column">
                <label><b>Presenting Complaints</b></label>
                <div>
                    <textarea name="comp" id="textarea" cols="51" rows="10" required>
                        <?php echo $r['comp']; ?>
                    </textarea>
                </div>
            </div>



            <div class="field-column">
                <label><b>Appetite</b></label>
                <div>
                    <input type="text" class="demo-input-box" 
                        name="ape" value=<?php echo "'".$r['ape']."'"; ?> > 
                 </div>
            </div>

            <div class="field-column">
                <label><b>Thirst</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="thi"  value=<?php echo "'".$r['thi']."'"; ?> >        
                </div>
            </div>


            <div class="field-column">
                <label><b>Bowels</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="bow"  value=<?php echo "'".$r['bow']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                <label><b>Urine</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="uri"  value=<?php echo "'".$r['uri']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                <label><b>Sweat</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="swe" value=<?php echo "'".$r['swe']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                <label><b>Sleep</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="sle"  value=<?php echo "'".$r['sle']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                <label><b>Thermal Reaction</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="ther"  value=<?php echo "'".$r['ther']."'"; ?> >
                </div>
            </div>

            <div class="field-column">
                <label><b>Totality of Symptoms</b></label>
                <div>
                    <textarea name="tos" id="textarea" cols="51" rows="12" required>
                        <?php echo $r['tos']; ?>
                    </textarea>
                </div>
            </div>

            <div class="field-column">
                <label><b>Keynote of Prescribing</b></label>
                <div>
                    <textarea name="key" id="textarea" cols="51" rows="9" required>
                        <?php echo $r['key']; ?>
                    </textarea>
                </div>
            </div>   
        </div>
            
        
        <div class="seccontent">

            <div class="field-column">
                <label><b>ID</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="id" value=<?php echo "'".$r1['id']."'"; ?>>
                </div>
            </div>

            <div class="field-column">
                <label><b>Age</b></label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="age" value=<?php echo "'".$r['age']."'"; ?> >
                </div>
            </div>

            
            <div class="field-column">
                <label><b>Level of Health</b></label>
                <div>
                    <textarea name="loh" id="textarea" cols="51" rows="13" required>
                        <?php echo $r['loh']; ?>
                    </textarea>
                </div>
            </div>

            <div class="field-column">
                <label><b>Family History</b></label>
                <div>
                    <textarea name="fh" id="textarea" cols="51" rows="15" required>
                        <?php echo $r['fh']; ?>
                    </textarea>
                </div>
            </div>

            <div class="field-column">
                <label><b>Menstral History</b></label>
                <div>
                    <textarea name="mh" id="textarea" cols="51" rows="8" required>
                        <?php echo $r['mh']; ?>
                    </textarea>
                </div>
            </div>

            <div class="field-column">
                <label><b>Pathology</b></label>
                <div>
                    <textarea name="pato" id="textarea" cols="51" rows="11" required>
                        <?php echo $r['pato']; ?>
                    </textarea>
                </div>
            </div>

            <div class="field-column">
                <label><b>Prescription</b></label>
                <div>
                    <textarea name="pres" id="textarea" cols="51" rows="16" required>
                        <?php echo $r['pres']; ?>
                    </textarea>
                </div>
            </div>

        </div>



            
                <div>
                    <input type="submit"
                        name="button" value="Submit" onClick= "confirmDeletion()"
                        class="btnRegister">
                </div>
            
        
        </div>
    </form>
</body>
<script>
function confirmDeletion() {
  alert("Registered successfully");
}
</script>
</html>