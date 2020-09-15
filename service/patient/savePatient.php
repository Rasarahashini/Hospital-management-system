<?php

include'../dbConnection.php'; // include database connect page

//assign values to variables
$id = $_POST["id"]; 
$name=$_POST["name"];
$age=$_POST["age"];
$nic=$_POST["nic"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$email=$_POST["email"];

//check all fileds are filled
if( empty($name)|| empty($age) || empty($nic) || empty($address) || empty($contact) || empty($email) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for patient table in database
if (isset($_POST["save"])) {
 $sql = "INSERT INTO patient VALUES (null, '" . $name . "', " . $age . ", '" . $nic . "', '" . $address . "', '" . $contact . "', '" . $email . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../patient.php?msg=SaveSucess"); // pass message
    } else {
        die("There was a problem, please try again!") ;
    }
    
// update details 
}else{
    $sql = "UPDATE patient SET name='" . $name . "', age=" . $age . ", nic='" . $nic . "', address='" . $address . "', contact='" . $contact . "', email='" . $email . "' WHERE id=".$id;

  if ($conn->query($sql) === TRUE) {
     header("Location: ../../patient.php?msg=UpdateSucess"); // pass success message
   } else {
     die("There was a problem, please try again!") ;
  }
}

$conn->close();


