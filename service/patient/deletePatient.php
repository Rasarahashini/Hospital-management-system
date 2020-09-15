<?php

include '../dbConnection.php';

$id = $_GET['id'];

$sql = "DELETE FROM patient WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
    header("Location: ../../patient.php?msg=DeleteSucess");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
