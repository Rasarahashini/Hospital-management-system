<?php

include'service/dbConnection.php';  // include database connect page

//select room all details in database 
$sql="SELECT * FROM room where 1=1";
if(isset($_GET["searchId"])&& $_GET["searchId"]!=""){
    $sql.=" and id='" . $_GET["searchId"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_rooms' cellspacing='0px'>"
    ."<tr>"
    ."<th>Floor</th>"
    ."<th>Room No</th>"
    ."<th>Type</th>"
    ."<th>Description</th>"
    ."<th>Booking</th>"           
    ."</tr>";
    
    while($row = $result->fetch_assoc()){
       echo "<tr><td>".$row["floor"]."</td>"
               ."<td>".$row["room_no"]. "</td>"
               ."<td>".$row["type"]. "</td>"
               ."<td>".$row["description"]. "</td>"
               ."<td><button class='btn_book' onClick='check_box()'>Book</button></td>"
               ."</tr>";    
    }
    echo "</table>"; // display table
}else{
    echo "0 result";  // if details not have in database then pass this message 
} 

$conn->close();
?>

