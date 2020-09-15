<?php

include'../dbConnection.php'; // include database connect page

$id=$_GET["id"];  //get ID to delete details 
$sql= "DELETE FROM invoice_item WHERE id=".$id; //delete detail from database by Id

if ($conn->query($sql)=== TRUE){
    header ("Location:../../billing.php?msg=DeletedInvoice");   //pass seccess message 
}else{
    die("There was a problem, please try again!") ;  // meaningfull message
}
$conn->close();


