<?php
include'../dbConnection.php'; // include database connect page

//assign values to variables
$name = $_POST["name"];
$description = $_POST["Description"];
$treatement_date = $_POST["treatmentDate"];
$patient_deciases=$_POST["decease"];
$staff_member_id=$_POST["staffmember_id"];

//check all fileds are filled
if( empty($name)|| empty($description) || empty($treatement_date) || empty($patient_deciases) || empty($staff_member_id) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for treatement table in database
if (isset($_POST["save"])) {
    $sql = "INSERT INTO treatement VALUES (null, '" . $name . "', '" . $description . "', '" . $treatement_date . "','" . $patient_deciases . "','" . $staff_member_id . "')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../../patient_deciase.php?msg=TreatementSaved");  // pass success message
    } else {
        die('Error: Please Input correct details!'); // meaningful error message
    }
}
$conn->close();


