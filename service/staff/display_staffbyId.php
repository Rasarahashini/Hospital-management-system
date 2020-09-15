<?php    
include'service/dbConnection.php';
    
    $sql="";
    $name="";
    $age="";
    $nic="";
    $type="";
    $contact="";
    $email="";
    

if(isset($_GET["searchId"])){
     $sql.="SELECT * FROM staff_member where id=". $_GET["searchId"];
$result=$conn->query($sql);

if($result->num_rows > 0){
    //output data of each row
    if($row === $result->fetch_assoc()){
        $name = $row["name"];
        $age = $row["age"];
        $nic = $row["nic"];
        $address = $row["type"];
        $contact = $row["contact"];
        $email= $row["email"];
                
    }   
    }else{
         echo "0 result";
    }
}
   
 $conn->close(); 
