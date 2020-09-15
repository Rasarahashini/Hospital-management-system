<?php

include'service/dbConnection.php';  // include database connect page

//select treatement details, staff member name and patient name in database 
$sql="SELECT t.id as id, t.name as name, t.description as description, pd.description as patient_deciases, t.treatement_date as treatement_date, s.name as staff_member_id FROM patient_deciases pd, treatement t, staff_member s where t.patient_deciases=pd.id and t.staff_member_id=s.id";
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){
    $sql.=" and name='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_treatements' cellspacing='0px'>"
    ."<tr>"
    ."<th>Patient Name</th>"
    ."<th>desctription</th>"
    ."<th>Treatement Date</th>"
    ."<th>Patient decease</th>"           
    ."<th>Doctor Name</th>"           
    ."<th></th>"           
    ."</tr>";
    
    while($row = $result->fetch_assoc()){
       echo "<tr><td>". $row["name"]. "</td>"
                ."<td> ".$row["description"]."</td>"
                ."<td>".$row["treatement_date"]."</td>"
                ."<td>".$row["patient_deciases"]."</td>"
                ."<td>".$row["staff_member_id"]."</td>"
               // delete button for delete detail
               ."<td><a class='btn_delete' href='service/patent_deciase/delete_treatement.php?id=".$row["id"]."'>Delete</a></td>"
               . "</tr>";    
    }
    echo "</table>"; // display table
}else{
    echo "0 result"; // if details not have in database then pass this message 
}

$conn->close();
?>

