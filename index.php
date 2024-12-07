<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Add Products</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Store</h2>
                <img src="mylogo.png" alt="logo" width="400px"> 
                <br>
                <input type="text" name="name" placeholder="Enter The Product Name">
                <br>
                <input type="text" name="price" placeholder="Enter The Product Price">
                <br>
                <input type="file" name="image" id="file" style="display:none;">
                <label for="file">Upload Image</label>
                <button name="upload">Upload Products</button>
                <br><br>
                <a href="products.php">Show all the Products</a>
            </form>
        </div>
    </center>
</body>
</html>
