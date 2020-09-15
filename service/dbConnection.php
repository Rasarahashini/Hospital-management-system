   <?php

//login to dabase 
$servername="localhost";
$username="root";
$password="rootsql";
$dbname="hospital_management";

//create connection
@$conn= new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die(" Could not connect to database!"); // meaningful error message
}

?>
