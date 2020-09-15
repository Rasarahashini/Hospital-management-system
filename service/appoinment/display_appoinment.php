<?php

include'service/dbConnection.php'; // include database connect page

//select appinment details, staff member name and patient name in database for appoinmnet
$sql="SELECT ap.id as id, ap.no as no, ap.appoinment_date as appoinment_date, p.name as patient, sm.name as staff_member FROM appoinment ap, "
        . "patient p, staff_member sm where ap.patient=p.id and ap.staff_member=sm.id;";
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){
    $sql.=" and name='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_displayappoinment' cellspacing='0px'>"
    ."<tr>"
    ."<th>Appoinment Nu</th>"
    ."<th>Appoinment Date</th>"
    ."<th>Doctor Name</th>"
    ."<th>Patient Name</th>"
    ."<th></th>"           
    ."</tr>";
    
    while($row = $result->fetch_assoc()){
      echo "<tr><td>". $row["no"]. "</td>"
            ."<td class='appoinmentDate'> ".$row["appoinment_date"]."</td>"
            ."<td class='doctorName'>".$row["staff_member"]."</td>"
            ."<td>".$row["patient"]."</td>"
           // delete button for delete detail
            ."<td><a class='btn_delete' href='service/appoinment/delete_appoinment.php?id=".$row["id"]."'>Delete</a></td>"
            . "</tr>";    
    }
    echo "</table>";
}else{
    echo "0 result"; // if details not have in database then pass this message 
}

$conn->close();
?>


