<?php

include'../dbConnection.php'; // include database connect page

$id=$_GET["id"]; //get ID to delete details 
$sql= "DELETE FROM treatement WHERE id=".$id;  //delete detail from database by Id

if ($conn->query($sql)=== TRUE){
    header ("Location:../../patient_deciase.php?msg=TreatementDeleted"); //pass seccess message 
}else{
    die("There was a problem, please try again!") ; // pass meaningfull message
}
$conn->close();


