<?php

include'service/dbConnection.php';  // include database connect page

//select schedule details, room numbers and patient name 
$sql="SELECT sh.id as id, sh.admit_date as admit_date, sh.discharge_date as discharge_date,  r.room_no as room, p.name as patient FROM room_schedule sh, patient p, room r where sh.patient=p.id and sh.room=r.id";
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){
    $sql.=" and name='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_roomschedule' cellspacing='1px'>"
    ."<tr>"
    ."<th>Room no</th>"
    ."<th>Patient name</th>"
    ."<th>Admit Date</th>"
    ."<th>Leaving Date</th>"   
    ."<th></th>"   
    ."</tr>";
    
    while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row["room"]. "</td>"
               ."<td>".$row["patient"]. "</td>"
               ."<td class='admitDate'>".$row["admit_date"]. "</td>"
               ."<td class='leavingDate'>".$row["discharge_date"]. "</td>"
               // delete button for delete detail
               ."<td><a class='btn_delete' href='service/room/delete_booking.php?id=".$row["id"]."'>Delete</a></td>"
               ."</tr>";    
    }
    echo "</table>"; // display table
}else{
    echo "0 result";
}

$conn->close();
?>
