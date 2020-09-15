<?php
include'../dbConnection.php';  // include database connect page

//assign values to variables
$visit_date = $_POST["visitdate"];
$description = $_POST["Description"];
$patient_id=$_POST["Dpatient"];

if( empty($visit_date)|| empty($description) || empty($patient_id) ){
     die("You must fill in all of the fields!") ; 
}
try{
    // insert data for desease table in database
if (isset($_POST["save"])) {
    $sql = "INSERT INTO patient_deciases VALUES (null, '" . $description . "', '" . $visit_date . "', '" . $patient_id . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../patient_deciase.php?msg=SavedNewDecease");   // pass success message
    } else {
    // Throw exception if details saving process failed
    throw new Exception('There is a problem, please input correct details! ');  
    }
  }
} catch (Exception $ex){
    // Handle the exception
    echo 'Message: '.$ex->getMessage();
}
$conn->close();

