<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './pages/import.html'; ?>
    </head>
    <body class="usermodule_body" onload="<?php echo isset($_GET["searchId"]) ? 'showStaffDialog()' : ''; ?>">
        <div class="dash-header">
            <img src="img/hospital_logone1w.png" width="200px" height="80px;" class="login_logo" />
            <?php include './pages/accountantAccess.html'; ?>
        </div>

    </div>
    
    
    <div class=" module-content3">
        <button onClick="showStaffDialog()">+ Add new Member</button>
        <form method="GET" action="staff.php">
            <img src="img/58016_1479884471.png" width="50px"/> <p> Staff Members</p>
            <?php include'./service/staff/displayStaff.php' ?>
        </form>
    </div>
    
    
     <div class="appoinment-icon"> 
        <img src="img/calendar_estimate_milestones-512_1.png" width="90px" onClick="showAppoinment()"  />
        <span class="tooltiptext">New Appoinment</span>
    </div>
    
    
    <div class="display_appoinments">
         <form method="GET" action="staff.php">
             <p> Appoinment records</p>
            <?php include'./service/appoinment/display_appoinment.php' ?>
        </form>
    </div>
    
    
    <div id="appoinment-form">
        <img src="img/Gray_Multiply (1).png" width="12px" class="Aclose_Icon" onClick="hideAppoinment()"/>
        <form method="POST" action="service/appoinment/save-appoinment.php"class="appoiment">
            <img src="img/Icon_14-256.png" width="50px"/>
            <p> New Appointment</p>
            <table class="tbl_appoinment" >
                <tr>
                    <td>Appointment Number:</td>
                    <td><input type="text" name="no" /></td>
                </tr>
                <tr>
                    <td>Appointment Date:</td>
                    <td><input type="datetime-local" name="date"/></td>
                </tr>
                <tr>
                    <td>Patient Name:</td>
                </tr>
                <tr>
                    <td>Staff member  Name:</td>
                </tr>
            </table>
             <input type="submit" value="save" name="save"/>
             
        <div method="GET" action="service/appoinment/combobox1.php">
         <?php include'./service/appoinment/combobox1.php' ?>  
        </div>
        <div method="GET" action="service/appoinment/combobox2.php">
         <?php include'./service/appoinment/combobox2.php' ?>
        </div>
        </form>
        
    </div>

    
    <div id="dlg" class="dialog">
        <p>Add New Member</p>
        <form method="POST" action="service/staff/saveStaff.php">
            <table border="0" class="tbl_savestaff">
                <tr>
                    <td> Name:</td>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                    <td> Age:</td>
                    <td><input type="text" name="age"/></td>
                </tr>
                <tr>
                    <td>NIC:</td>
                    <td><input type="text" name="nic"/></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><input type="text" name="type" /></td>
                </tr>
                <tr>
                    <td>Join Date:</td>
                    <td><input type="date" name="joined_date" /></td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td><input type="text" name="email" /></td>
                </tr>
                <tr>
                    <td> Contact Number:</td>
                    <td><input type="text" name="contact"/></td>
                </tr>

            </table>
            <input type="submit" value="save" name="save"/>
        </form>
        <button onClick="hideStaffDialog()" class="cancel-dlg">Cancel</button>
    </div>
    
    
</body>
</html>