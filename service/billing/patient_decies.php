<?php
include'service/dbConnection.php';

$sql="SELECT * FROM patient_deciases where 1=1";
if(isset($_GET["searchId"])&& $_GET["searchId"]!=""){
    $sql.=" and id='" . $_GET["searchId"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <select class='combo_pd' name='deciase'>";
    
    while($row = $result->fetch_assoc()){
       echo "<option value='". $row["id"]. "'>". $row["description"]. "</option>";    
    }
    echo "</select>";
}else{
    echo "0 result";
}
$conn->close();
?>
