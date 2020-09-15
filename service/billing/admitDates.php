<?php
include'service/dbConnection.php';

$sql="SELECT * FROM room_schedule where 1=1";
if(isset($_GET["searchId"])&& $_GET["searchID"]!=""){
    $sql.=" and id='" . $_GET["searchID"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <select class='comboadmitdate' name='Admitdate'>";
    
    while($row = $result->fetch_assoc()){
       echo "<option value='". $row["id"]. "'>". $row["admit_date"]. "</option>";    
    }
    echo "</select>";
}else{
    echo "0 result";
}
$conn->close();
?>


