 <?php

include'../dbConnection.php';  // include database connect page

//assign values to variables
$stayed_dates = $_POST["stayed_dates"];
$amount = $_POST["ammount"];
$invoice = $_POST["invoiceNo"];
$staff_member = $_POST["staffmember_id"];
$treatement = $_POST["treatement"];
$room_schedule = $_POST["Admitdate"];

if( empty($stayed_dates)|| empty($amount) || empty($invoice) || empty($staff_member) || empty($treatement) || empty($room_schedule) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for invoice item table in database
if (isset($_POST["save"])) {
    $sql = "INSERT INTO invoice_item VALUES (null," . $stayed_dates. ", ". $amount . ", " . $invoice . ", " . $staff_member . "," . $treatement . "," . $room_schedule . ")";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../billing.php?msg=SavedInvoiceItems"); // pass success message
    } else {
        die("There was a problem, please try again!") ;   // meaningfull message
    }
}
$conn->close();

