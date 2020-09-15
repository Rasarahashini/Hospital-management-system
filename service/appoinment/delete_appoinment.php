<?php

include'../dbConnection.php';  // include database connect page

$id=$_GET["id"];   //get ID to delete details 
$sql= "DELETE FROM appoinment WHERE id=".$id;  //delete detail from database by Id

if ($conn->query($sql)=== TRUE){
    header ("Location:../../staff.php?msg=DeletedAppointment");   //pass seccess message 
}else{
    die("There was a problem, please try again!") ; // pass meaningfull message
}
$conn->close();

