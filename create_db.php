<?php

include_once('connect.php');
if (isset($_POST['createProduct'])) {
    
    // รับค่าที่ Add เข้ามา
    $productName = $_POST['productName'];
    $productSize = $_POST['productSize'];
    $productPrice = $_POST['productPrice'];
    $product6kg = $_POST['product6kg'];
    $product26kg = $_POST['product26kg'];
    $product51kg = $_POST['product51kg'];
    $product201kg = $_POST['product201kg'];
    $productQuantity = $_POST['productQuantity'];

    //Query ข้อมูล
    $sql = "INSERT INTO product ( Product_Name, Size, Price, 6kg, 26kg, 51kg, 201kg, Mix_Quantity )
                    VALUES('$productName','$productSize','$productPrice','$product6kg','$product26kg',
                            '$product51kg','$product201kg','$productQuantity')";

   
    if ($conn->query($sql)) {
        echo "<script>alert('Add new Product  Successfully');location.href = 'index.php';
        </script>";
    } else
        echo "Error: " . $sql . "<br>" . $conn->error;
}
