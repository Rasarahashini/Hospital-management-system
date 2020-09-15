<?php

include'service/dbConnection.php'; // include database connect page

//select invoice table details and invoice item table details in database 
$sql="SELECT init.id as id, inv.invoice_no as invoice, p.name as patient, init.amount as amount,init.stayed_dates as stayed_dates, t.name as treatement, sm.name as staff_member, rs.admit_date as room_schedule FROM invoice_item init,invoice inv,patient p,treatement t, staff_member sm,room_schedule rs where init.invoice=inv.id and init.treatement=t.id and inv.patient=p.id and init.staff_member=sm.id and init.room_schedule=rs.id";
if(isset($_GET["searchName"])&& $_GET["searchName"]!=""){
    $sql.=" and name='" . $_GET["searchName"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <table border='0' class='tbl_display_invoices' cellspacing='1px'>"
    ."<tr>"
    ."<th>No</th>"
    ."<th>Patient name</th>"
    ."<th>Doctor name</th>"   
    ."<th>Treatement</th>"   
    ."<th>Admit date</th>"   
    ."<th>Stayed dates</th>"   
    ."<th>Ammount</th>"   
    ."<th></th>"   
    ."</tr>";
    
    while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row["invoice"]. "</td>"
               ."<td>".$row["patient"]. "</td>"
               ."<td>".$row["staff_member"]. "</td>"
               ."<td>".$row["treatement"]. "</td>"
               ."<td>".$row["room_schedule"]. "</td>"
               ."<td>".$row["stayed_dates"]. "</td>"
               ."<td>".$row["amount"]. "</td>"
               ."<td><a class='btn_delete' href='service/billing/deleteInvoice.php?id=".$row["id"]."'>Delete</a></td>"
               ."</tr>";    
    }
    echo "</table>";  // display table
}else{
    echo "0 result"; // if details not have in database then pass this message 
}

$conn->close();
?>
