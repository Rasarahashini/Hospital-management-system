<?php
include'../dbConnection.php'; // include database connect page

//assign values to variables
$no = $_POST["no"];
$appoinment_date = $_POST["date"];
$patient = $_POST["patient"];
$staff_member = $_POST["staff_member"];

//check all fileds are filled
if( empty($no)|| empty($appoinment_date) || empty($patient) || empty($staff_member) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for appoinment table in database
if (isset($_POST["save"])) {

    $sql = "INSERT INTO appoinment VALUES (null, '" . $no . "', '" . $appoinment_date . "', '" . $patient . "', '" . $staff_member . "')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../staff.php?msg=SavedNewAppointment"); // pass success message
    } else {
        die("There was a problem, please try again!") ; // pass meaningfull message
    }
} else {
    die("There was a problem, please try again!") ;; // pass meaningfull message
}
$conn->close();


