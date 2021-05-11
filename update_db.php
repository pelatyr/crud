<?php

include_once('connect.php');
if (isset($_POST['updateProduct'])) {

    $productName = $_POST['productName'];
    $productSize = $_POST['productSize'];
    $productPrice = $_POST['productPrice'];
    $product6kg = $_POST['product6kg'];
    $product26kg = $_POST['product26kg'];
    $product51kg = $_POST['product51kg'];
    $product201kg = $_POST['product201kg'];
    $productQuantity = $_POST['productQuantity'];
    $id = $_POST['hiddenid'];

   
    $sql = "UPDATE product 
            SET Product_Name = '$productName', Size = '$productSize', Price = '$productPrice', 
                6kg = '$product6kg', 26kg = '$product26kg', 51kg = '$product51kg', 
                201kg = '$product201kg', Mix_Quantity = '$productQuantity'
            WHERE id = $id";

    if ($conn->query($sql)) {
        echo "<script>alert('Update Product  Successfully');location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
