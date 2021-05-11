<?php
include_once('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE id = $id";

    if ($conn->query($sql)) {
        echo "<script>alert('Delete Product  Successfully');location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     