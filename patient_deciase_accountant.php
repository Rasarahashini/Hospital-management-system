<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './pages/import.html'; ?>
    </head> 
        <body class="usermodule_body">
       <div class="dash-header">
            <img src="img/hospital_logone1w.png" width="200px" height="80px;" class="login_logo" />
            <?php include './pages/accountantAccess.html'; ?>
        </div>
           
             <div class="Patient_dciases">
                 <button class="showsavedecease" onclick="show_savePatientDicease()">Add dicease</button>
                <form method="GET" action="patient_deciase.php"> 
                    <img src="img/p1.png" width="43px"/>
                    <p> Patient's Deseases</p>
                    <?php include'./service/patent_deciase/display_diciases.php' ?>
                </form>  
            </div> 
            <div id="save-patientdicies">
                <img src="img/Gray_Multiply (1).png" width="12px" class="save_pd_close_Icon" onClick="hide_savePatientdicease()"/>
                <form method="post" action="service/patent_deciase/save_decease.php"> 
                    <p> Enter patient details</p>
                    <table class="tbl-savepatintdecis">
                        <tr>
                              <td>Name:</td>
                              <div method="GET" action="service/patent_deciase/combobox3.php" >
                            <?php include'./service/patent_deciase/combobox3.php' ?>  
                           </div>
                        </tr>
                        <tr>
                              <td>Description:</td>
                              <td><textarea cols="16" rows="3" name="Description" required="true" ></textarea></td>
                        </tr>
                         <tr>
                              <td>visit date:</td>
                              <td> <input type="date" name="visitdate" ></td>
                        </tr>
                        <tr>
                              <td><input type="submit" value="save" name="save"/></td>
                        </tr>
                    </table>
                </form>
            </div>
            
            
             <div class="treatements">
                <input type="submit" class="addTreatment" value="Add treatment" onclick="show_saveTreatment()"/>
                <form method="GET" action="patient_deciase.php">
                    <img src="img/d1.png" width="50px"/>
                    <p> Treatments Records </p>
                  <?php include'./service/patent_deciase/tretements_display.php' ?>
                </form> 
            </div> 
            
            <div id="save_Treatements">
                <img src="img/Gray_Multiply (1).png" width="12px" class="saveTreatment_closeIcon" onClick="hide_savetreatemnt()"/>
                <form method="post" action="service/patent_deciase/saveTreatements.php"> 
                    <p> Enter patient's treatment details</p>
                    <table class="tbl-savetreatements">
                        <tr>
                              <td>Patient Name:</td>
                              <td><input type="text" name="name"  required="true" echo /></td>
                        </tr>
                        <tr>
                             <td>Description:</td>
                              <td><textarea cols="16" rows="3" name="Description" required="true" ></textarea></td>
                              
                        </tr>
                        <tr>
                             <td>Treatment date:</td>
                              <td> <input type="date" name="treatmentDate" /></td>
                        </tr>
                        <tr>
                             <td>Patient Decease:</td>
                              <?php include'./service/patent_deciase/combobox4.php' ?>
                        </tr>
                        <tr>
                             <td>Doctor:</td>
                             <?php include'./service/patent_deciase/combobox5.php' ?>
                        </tr>
                        <tr>
                              <td><input type="submit" value="save" name="save"/></td>
                        </tr>
                       
                    </table>
                </form>
                 
            </div>
    </body>
</html> 


 

