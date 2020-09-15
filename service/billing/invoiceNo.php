<?php
include'service/dbConnection.php'; // include database connect page

//select invoice all details in database 
$sql="SELECT * FROM invoice where 1=1"; 
if(isset($_GET["searchId"])&& $_GET["searchId"]!=""){
    $sql.=" and id='" . $_GET["searchId"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <select class='invoiceNo' name='invoiceNo'>";
    
    while($row = $result->fetch_assoc()){
        //input invoice numbers to combo box 
       echo "<option value='". $row["id"]. "'>". $row["invoice_no"]. "</option>";    
    }
    echo "</select>"; // display combo box
}else{
    echo "0 result"; // if details not have in database then pass this message 
}
$conn->close();
?>

