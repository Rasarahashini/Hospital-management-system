<?php
include'service/dbConnection.php'; // include database connect page

//select staff member table's all details 
$sql="SELECT * FROM staff_member where 1=1";
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){ // search patient name
    $sql.=" and name='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_doctors' cellspacing='0'>"
    ."<tr>"
    ."<th>Name</th>"
    ."<th>Age</th>"
    ."<th>NIC</th>"
    ."<th>Type</th>"
    ."<th>Contact</th>"
    ."<th>Email</th>"
    ."<th></th>"           
    ."</tr>";
    
    while($row = $result->fetch_assoc()){
       echo "<tr><td>". $row["name"]. "</td>"
                ."<td> ".$row["age"]."</td>"
                ."<td>".$row["nic"]."</td>"
                ."<td>".$row["type"]."</td>"
                ."<td>".$row["contact"]."</td>"
                ."<td>".$row["email"]."</td>"
                // delete button for delete detail 
               ."<td><a class='btn_delete' href='service/staff/delete_member.php?id=".$row["id"]."'>Delete</a></td>"
               . "</tr>";    
    }
    echo "</table>";
}else{
    echo "0 result";
}

$conn->close();
?>

