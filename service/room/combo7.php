<?php
include'service/dbConnection.php';

$sql="SELECT * FROM room where 1=1";
if(isset($_GET["searchNo"])&& $_GET["searchNo"]!=""){
    $sql.=" and room_no='" . $_GET["searchNo"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <select class='combo_roomno' name='roomno'>";
    
    while($row = $result->fetch_assoc()){
       echo "<option value='". $row["id"]. "'>". $row["room_no"]. "</option>";    
    }
    echo "</select>";
}else{
    echo "0 result";
}
$conn->close();

