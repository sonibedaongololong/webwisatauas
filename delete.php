<?php
include 'db_connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM pemesanan WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: modifikasi.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
