<?php
include'service/dbConnection.php';

$sql="SELECT * FROM user where 1=1";
if(isset($_GET["username"])&& $_GET["username"]!=""){
    $sql.=" and id='" . $_GET["username"]."'";
}

$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
   echo " <select class='usernames' name='username'>";
    
    while($row = $result->fetch_assoc()){
       echo "<option value='". $row["username"]. "'>". $row["username"]. "</option>";    
    }
    echo "</select>";
}else{
    echo "0 result";
}
$conn->close();
?>
