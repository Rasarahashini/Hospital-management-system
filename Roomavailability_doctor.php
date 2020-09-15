
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './pages/import.html'; ?>
    </head> 
    <body class="usermodule_body" onload="<?php echo isset($_GET["searchId"])? 'check_box()' : '';?>">
        <div class="dash-header">
            <img src="img/hospital_logone1w.png" width="200px" height="80px;" class="login_logo" />
            <?php include './pages/doctor_access.html'; ?>
        </div>
                
        <div class='rooms-booking'>
             <button onClick="show_addroom()" class="show_addroom">Add a Room</button>
            <img src="img/ao1.png" width="40px"/>
            <p>Rooms Booking </p>
            <form method="GET" action="Roomavailability.php">
                </form>
            <?php include'./service/room/show_rooms.php' ?>
            </div>
            <div class="room-schedule">
             <form method="GET" action="Roomavailability.php" >
                 <img src="img/1451141462_time__data_management-02.png" width="56px"/>
               <p>Room Schedule</p>
                <?php include'./service/room/show_schedule.php' ?>
            </form>
                
        </div>
            
        <div id="addRoom">
                
            <div class="cancel_addingroom">
                <center><img src="img/Gray_Multiply (1).png" width="12px"  onClick="hide_saveroom()"/></center>
            </div>
                <p>Adding a new room</p>
                <form method="POST" action="service/room/saveRoom.php">
                <table class="rooms_tbl">
                <tr>
                <td>Room no:</td>
                <td><input type="text" name="no"/></td>
                </tr>
                <tr>
                    <td>Floor:</td>
                    <td><input type="text" name="floor"/></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><input type="text" name="type"/></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><input type="text" name="description"/></td>
                </tr>
                <tr>
                    <td>Current Patient:</td>
                    <?php include'./service/room/combo6.php' ?>
                </tr>
            </table>
             <input type="submit" value="Save" name="save"/>
             </form>
        </div>
        
        <div id='booking_date'>
           <img src="img/Gray_Multiply (1).png" width="12px"  onClick="cancelbooking()" class="cancel_booking"/>
            <p>Enter your Booking Details</p>
            <form method="POST" action="service/room/savebooking-dates.php">
                <table class="tbl_savebokking">
                 <tr>
                    <td>Starting Date:</td>
                    <td><input type="date" name="admit_date"/></td><br/><br/>
                </tr>
                <tr>
                        <td>Leaving Date:</td>
                        <td><input type="date" name="discharge_date"/></td><br/>
                </tr>
                <tr>
                        <td>Room no:</td>
                        <?php include'./service/room/combo7.php' ?>
                </tr>
                <tr>
                    <td>Patient name:</td>
                    <?php include'./service/room/combo8.php' ?>
                </tr>
                </table>
                <input type="submit" value="Save" class="save-booking" name="save" onclick="sbc()"/>
                </form>
        </div>
        
            
    </body>
</html>
