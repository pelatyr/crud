<!doctype html>
<html lang="en">
<?php
include_once("connect.php");
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>index </title>
</head>

<body>

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
                <h2>CRUD system</h2>
                <div class="btn">
                    <button type="button" class="btn btn-success justif">
                        <a href="create.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>New Product
                        </a>
                    </button>
                </div>
                <div class="tabel">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>size</th>
                                <th>price</th>
                                <th>6kg</th>
                                <th>26kg</th>
                                <th>51kg</th>
                                <th>201kg</th>
                                <th>Quantity</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT
                                    * 
                                FROM
                                    product";
                        $resultProduct = $conn->query($sql);
                        while ($row = $resultProduct->fetch_assoc()) {
                        ?>
                            <tbody>
                                <td name="productId"><?php echo $row['id'] ?></td>
                                <td name="productName"><?php echo $row['Product_Name']; ?></td>
                                <td name="productSize"><?php echo $row['Size']; ?></td>
                                <td name="productPrice"><?php echo $row['Price']; ?></td>
                                <td name="product6kg"><?php echo $row['6kg']; ?></td>
                                <td name="product26kg"><?php echo $row['26kg']; ?></td>
                                <td name="product51kg"><?php echo $row['51kg']; ?></td>
                                <td name="product201kg"><?php echo $row['201kg']; ?></td>
                                <td name="productQuantity"><?php echo $row["Mix_Quantity"] ; ?></td>
                                <td><button type="button" class="btn btn-warning">
                                        <?php echo "<a href='update.php?id=$row[id] '>edit</a>"  ?>
                                    </button></td>
                                <td><button type="button" class="btn btn-danger">
                                        <?php echo "<a href='delete.php?id=$row[id] '>delete</a>"  ?>
                                    </button></td>
                            </tbody>
                        <?php } ?>
                        
                    </table>
                </div>
            </div>
        </div>
    


</body>

</html>

<style>
h2{
    text-align: center;
}

a{
    color: white;
}


</style>