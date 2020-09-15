  <?php

include'../dbConnection.php'; // include database connect page

//assign values to variables
$admit_date = $_POST["admit_date"];
$discharge_date = $_POST["discharge_date"];
$room = $_POST["roomno"];
$patient = $_POST["patientnameB"];

if( empty($admit_date)|| empty($discharge_date) || empty($room) || empty($patient) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for room schedule table in database
if (isset($_POST["save"])) {
    $sql = "INSERT INTO room_schedule VALUES (null, '" . $admit_date . "', '" . $discharge_date . "', '" . $room . "', '" . $patient . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../Roomavailability.php ?msg=SavedBooking"); // pass success message
    } else {
        die("Please input correct details!") ; // meaningfull message
    }
}

$conn->close();



