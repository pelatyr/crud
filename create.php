<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>create</title>
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

    <div class="container">
        <div class="row">
            <h2>Create</h2>
            <form method="post" action="create_db.php">
                <div class="form-group">
                    <label>Product Name</label>
                    <input class="form-control" type="text" name="productName" value="">
                    <label>Product Size</label>
                    <input class="form-control" type="text" name="productSize" value="">
                    <label>Product price</label>
                    <input class="form-control" type="text" name="productPrice" value="">
                    <label>6kg</label>
                    <input class="form-control" type="text" name="product6kg" value="">
                    <label>26kg</label>
                    <input class="form-control" type="text" name="product26kg" value="">
                    <label>51kg</label>
                    <input class="form-control" type="text" name="product51kg" value="">
                    <label>201kg</label>
                    <input class="form-control" type="text" name="product201kg" value="">
                    <label>Product Quantity</label>
                    <input class="form-control" type="text" name="productQuantity" value="">
                    
                        <input type="submit" class="btn btn-primary" value="submit" name="createProduct">
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                  
                </div>
            </form>
        </div>
    </div>

</body>

</html>

<style>
    .from-group {
        width: 500px;
    }

    .row {
        margin-top: 20px;
    }

    h2 {
        text-align: center;
    }
    .btn{
        margin-top: 10px;
        margin-bottom: 10px;
        justify-content: center;

    }
    .container{
        background-color:skyblue;
        border-radius: 10px;
    }
</style>