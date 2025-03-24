<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM Name WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted ";
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid ID";
}

$conn->close();
?>