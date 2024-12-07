<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Edit</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $id = $_GET['id'];



    /* ------------------------------------------ */
        /* ------------------------------------ */
    /* ------------------------------------------ */

    if (isset($_POST['upload'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $new_id = $_POST['new_id']; 
        $image = $_FILES['image']['name'];

        if ($image) {
            $target = "uploads/" . basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $target);

            $query = "UPDATE prod SET id='$new_id', name='$name', 
            price='$price', image='$target' WHERE id=$id";
        } else {
            $query = "UPDATE prod SET id='$new_id', name='$name', 
            price='$price' WHERE id=$id";
        }

        if (mysqli_query($con, $query)) {
            echo "<script>alert('Product updated successfully!');</script>";
            echo "<script>window.location.href = 'products.php';</script>";
        } else {
            echo "<script>alert('Error updating product!');</script>";
        }
    }
    /* ------------------------------------------ */
        /* ----------------------------------- */
    /* ------------------------------------------ */


    $up = mysqli_query($con, "SELECT * FROM prod WHERE id = $id");
    $data = mysqli_fetch_array($up);
    ?>

    <center>
        <div class="main">
            <form action="" method="post" enctype="multipart/form-data">
                <h2>Edit Products</h2>
                <br>
                <input type="text" name="name" 
                placeholder="Enter The Product Name" 
                value="<?php echo $data['name']; ?>">
                <br>
                <input type="text" name="price" 
                placeholder="Enter The Product Price" 
                value="<?php echo $data['price']; ?>">
                <br>
                <input type="text" name="new_id" 
                placeholder="Enter The New Product ID" 
                value="<?php echo $data['id']; ?>">
                <br>
                <input type="file" name="image" id="file" style="display:none;">
                <label for="file">Update Image</label>
                <br><br>
                <button name="upload">Edit Products</button>
                <br><br>
                <a href="products.php">Show all the Products</a>
            </form>
        </div>
    </center>
</body>
</html>
