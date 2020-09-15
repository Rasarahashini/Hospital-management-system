<?php

include'../dbConnection.php'; // include database connect page

//assign values to variables
$room_no = $_POST["no"];
$floor = $_POST["floor"];
$type = $_POST["type"];
$description = $_POST["description"];
$crrent_patient = $_POST["patientnameR"];

//check all fileds are filled
if( empty($room_no)|| empty($floor) || empty($type) || empty($description) || empty($crrent_patient)){
     die("You must fill in all of the fields!") ; 
}
// insert data for room table in database
if (isset($_POST["save"])) {
    $sql = "INSERT INTO room VALUES (null, '" . $room_no . "', '" . $floor . "', '" . $type . "','" . $description . "','" . $crrent_patient . "')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../Roomavailability.php?msg=RoomSaved"); // pass success message
    } else {
        die("There was a problem, please try again!") ;  // meaningfull message
    }
}
