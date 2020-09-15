<?php
include'service/dbConnection.php';  // include database connect page

//select deseases details and patient name in database of deseas
$sql="SELECT pd.id as id, pd.description as description, p.name as patient_id, pd.visit_date as visit_date FROM patient_deciases pd, patient p where pd.patient_id=p.id";
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){
    $sql.=" and name='" . $_GET["searchName"]."'";
}
$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_decaeses' cellspacing='0px'>"
    ."<tr>"
    ."<th>Patient</th>"
    ."<th>Desease</th>"
    ."<th>Visit date</th>"
    ."<th></th>"           
    ."<th></th>"           
    ."</tr>";
    
    while($row = $result->fetch_assoc()){
       echo "<tr><td>". $row["patient_id"]. "</td>"
                ."<td> ".$row["description"]."</td>"
                ."<td>".$row["visit_date"]."</td>"
               // delete button for delete detail
                ."<td><a class='btn_delete' href='service/patent_deciase/delete_decease.php?id=".$row["id"]."'>Delete</a></td>"
                . "</tr>";    
    }
    echo "</table>"; // display table
}else{
    echo "0 result";  // if details not have in database then pass this message 
}

$conn->close();
?>

