<!DOCTYPE html>
<html>
    <head>  <meta charset="UTF-8">
          <title></title>
          
        <!--include importing page to js and css -->
        <?php include './pages/import.html'; ?>
    </head>
    <body id="main_body">
        
        <!--Login header -->
        <div class="dash-header1">
            <img src="img/hospital_logone1w.png" width="210px" height="90px;" class="login_logo" />
        </div>
        
        <!--Dashboard -->
      <div class="content">
         <table class="tbl-dashboard">
         <tr>
            <td><div class='img-3'><a href="billing.php"><img src='img/New folder/1.jpg' width='200px' class="pic1" /><center>
                <div class="go_billing"><img src="img/invoice_icon-90.png" width="50px" class="img-billing"/>
                <p>Billing</p></div></center></a></div></td>
            <td><div class='img-1'><a href="patient.php"><img src='img/New folder/2.jpg' width='200px' /><center>
                <div class="go_patient"><img src="img/patient.png" width="35px" class="img-patient"/>
                <p>Patients</p></div></center></a></div></td>
            <td><div class='img-2'><a href="staff.php"><img src='img/New folder/3.jpg' width='200px' /><center>
                <div class="go_staff"><img src="img/5.png" width="35px" class="img-staff"/>
                 <p>Staff</p></div></center></a></div></td>
            <td><div class='img-7'><a href="Roomavailability.php"><img src='img/New folder/4.jpg' width='200px' /><center>
                <div class="go_room"><img src="img/7.png" width="35px" class="img-room"/>
                <p>Room Availability</p></div></center></a></div></td>
          </tr>
          </table>
      </div>
    </body>
</html>
