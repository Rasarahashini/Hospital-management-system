<?php    
include'service/dbConnection.php'; // include database connect page
    
    $sql="";
    $name="";
    $age="";
    $nic="";
    $address="";
    $contact="";
    $email="";
    
//search Patient by Id
if(isset($_GET["searchId"])){
     $sql.="SELECT * FROM patient where id=". $_GET["searchId"];
$result=$conn->query($sql);

if($result->num_rows > 0){
    //output data of each row
    if($row = $result->fetch_assoc()){
        $name = $row["name"];
        $age = $row["age"];
        $nic = $row["nic"];
        $address = $row["address"];
        $contact = $row["contact"];
        $email= $row["email"];
                
    }   
    }else{
         echo "0 result"; // if search details not have pass this message 
    }
 $conn->close(); 

}
?>
