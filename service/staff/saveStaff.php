 <?php
include'../dbConnection.php'; // include database connect page

//assign values to variables
$name=$_POST["name"];
$age=$_POST["age"];
$nic=$_POST["nic"];
$type=$_POST["type"];
$joined_date=$_POST["joined_date"];
$contact=$_POST["contact"];
$email=$_POST["email"];

//check all fileds are filled
if( empty($name)|| empty($age) || empty($nic) || empty($type) || empty($joined_date) || empty($contact) || empty($email) ){
     die("You must fill in all of the fields!") ; 
}else{
    //check email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../../staff.php?msg=InvalidEmail");
        
    } elseif (isset($_POST["save"])) {// insert data for staffmember table in database
        $sql = "INSERT INTO staff_member VALUES (null, '" . $name . "', '" . $age . "', '" . $nic . "','" . $joined_date . "', '" . $contact . "','" . $email . "', '" . $type . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../staff.php?msg=SaveSucess"); // pass success message
    } else {
        die("There was a problem, please try again!") ; // pass meaningfull message
    }
}
}

$conn->close();
?>

