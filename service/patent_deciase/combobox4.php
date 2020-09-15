<?php
include'service/dbConnection.php';

$sql="SELECT * FROM patient_deciases where 1=1";
if(isset($_GET["searchdescription"])&& $_GET["searchdescription"]!=""){
    $sql.=" and description='" . $_GET["searchdescription"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <select class='combo_patientdecease' name='decease'>";
    
    while($row = $result->fetch_assoc()){
       echo "<option value='". $row["id"]. "'>". $row["description"]. "</option>";    
    }
    echo "</select>";
}else{
    echo "0 result";
}
$conn->close();
?>
