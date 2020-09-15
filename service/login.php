<?php
include'./dbConnection.php'; // include database connect page

//assign values to variables
$username = $_POST['username'];
$password = $_POST['password']; 

//select users table details in database to check with typed data 
$sql = "SELECT username, id, password FROM user WHERE username='$username'"; 
$result = $conn->query($sql);
if ($result->num_rows != 0) {
    if ($row = $result->fetch_assoc()) {
        //check usernames and password
        if($row['password']==$password){
            if ($username==Administrator) {
                header("Location: ../main.php"); // access for main page
            } elseif ($username==Accountant) {
            header("Location: ../billing_accountant"); // access for accountant's pages
            }elseif ($username==Receptionist) {
            header("Location: ../patient_reception.php");// access for receptionist's pages
            }elseif ($username==Doctors) {
            header("Location: ../patient_deciase_doctor.php"); // access for doctor's pages
            }
        }else{
        header("Location: ../index.php?msg=Invalid"); // pass invalid message
        }
    }
}else{
    header("Location: ../index.php?msg=Invalid"); // pass invalid message
}
?>
