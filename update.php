<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>Update</title>
</head>

<body>
  <?php
  include('connect.php');

    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id = $id ";
    // $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
      $productName = $row['Product_Name'];
      $productSize = $row['Size'];
      $productPrice = $row['Price'];
      $product6kg = $row['6kg'];
      $product26kg = $row['6kg'];
      $product51kg = $row['51kg'];
      $product201kg = $row['201kg'];
      $productQuantity = $row['Mix_Quantity'];
    }
  ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->

  <div class="container-fluid">
    <div class="row">
      <h2>Update</h2>
      <form method="post" action="update_db.php">
        <div class="form-group">
          <label>Product id</label>
          <input class="form-control" type="text" name="productId" value="<?php echo "$id"; ?>">
          <label>Product Name</label>
          <input class="form-control" type="text" name="productName" value="<?php echo "$productName"; ?>">
          <label>Product Size</label>
          <input class="form-control" type="text" name="productSize" value="<?php echo "$productSize"; ?>">
          <label>Product price</label>
          <input class="form-control" type="text" name="productPrice" value="<?php echo "$productPrice"; ?>">
          <label>6kg</label>
          <input class="form-control" type="text" name="product6kg" value="<?php echo "$product6kg"; ?>">
          <label>26kg</label>
          <input class="form-control" type="text" name="product26kg" value="<?php echo "$product26kg"; ?>">
          <label>51kg</label>
          <input class="form-control" type="text" name="product51kg" value="<?php echo "$product51kg"; ?>">
          <label>201kg</label>
          <input class="form-control" type="text" name="product201kg" value="<?php echo "$product201kg"; ?>">
          <label>Product Quantity</label>
          <input class="form-control" type="text" name="productQuantity" value="<?php echo "$productQuantity"; ?>">
          
          <input type="submit" class="btn btn-primary" value="submit" name="updateProduct">
          <input type="hidden" name="hiddenid" value="<?php echo "$id" ?>">
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>




</body>

</html>