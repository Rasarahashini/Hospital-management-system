   <?php

include'../dbConnection.php'; // include database connect page

//assign values to variables
$invoice_no = $_POST["Invoice_no"];
$patient = $_POST["Bpatient"];

if( empty($invoice_no)|| empty($patient) ){
     die("You must fill in all of the fields!") ; 
}
// insert data for invoice table in database
if (isset($_POST["save"])) {

    @$sql = "INSERT INTO invoice VALUES (null, '" . $invoice_no . "', " . $patient . ")";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../billing.php?msg=SavedInvoice"); // pass success message
    } else {
        die("There was a problem, please try again!") ;  // meaningfull message
    }
}
$conn->close();


