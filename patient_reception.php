<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './pages/import.html'; ?>
    </head> 
    <body class="usermodule_body" onload="<?php echo isset($_GET["searchId"])? 'showSavepatient()' : ''; ?>">
        <div class="dash-header">
            <img src="img/hospital_logone1w.png" width="200px" height="80px;" class="login_logo" />
            <?php include './pages/receptionAccess.html'; ?>
        </div>
        
        <div class="content">
            <div id="module-content"> 
                <form method="post" action="service/patient/savePatient.php"> 
                     <?php include './service/patient/searchPatientbyId.php';?>
                    <p> Enter patient details</p>
                    <table class='tbl-patient'>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="name"  required="true" value="<?php echo $name; ?>"/></td><br/>
                        <td>Email Address:</td>
                        <td> <input type="email" name="email"  value="<?php echo $email; ?>"/></td><br/>
                        </tr>
                        <tr>
                            <td>Age:</td>
                            <td> <input type="number" name="age" value="<?php echo $age; ?>"/><br/></td>
                            <td>Gender:</td>
                            <td><input type="text" name="gender"  </td><br/>
                        </tr>
                        <tr>
                            <td>Patient id:</td>
                            <td><input type="text" id="nic" name="nic"  required="true" onkeyup="checkNIC()" value="<?php echo $nic; ?>"/></td><br/>
                            <p id="nic-descriiptor" class="invalid-description" ></p>
                            <td>Living Address:</td>
                            <td><textarea cols="16" rows="3" name="address"  required="true" value="<?php echo $address; ?>"></textarea></td> 
                        </tr>
                        <tr>
                            <td>Contact number:</td>
                            <td> <input type="tel" name="contact"  required="true" value="<?php echo $contact; ?>"/></td><br/>
                            <td>Admit date:</td>
                            <td><input type='date' name='Admitdate' /></td>
                        </tr>
                    </table>
                    <br/>
                    <br/>
                    <button  class="save-patient" name="save">Save</button>
                </form>
                <button onClick="cancelSavepatient()" class="cancel-save">Cancel</button>
            </div>

            <div class="module-content1">
                <form method="GET" action="Patient.php">
                    <img src="img/user-512.png" width="50px"/>
                    <p> Patient's Records</p>
                    <div class="search-patient">

                        <input type="text" name="searchName" plaseholder="search by name"/>
                        <input type="submit" value="Search" />
                    </div>
                    <br/>
                    <br/>
                    <?php include'./service/patient/searchPatient.php' ?>
                </form>                    
                <button onclick="showSavepatient()" class="newpatient">Add new patient</button>
            </div>

    </body>
</html> 


