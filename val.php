<?php
include("config.php");
$id=$_GET['id'];
$up = mysqli_query($con , "SELECT * FROM prod WHERE id=$id");

$data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm purchase</title>
    <style>
        input{
            display:none;
        }
        .main{
            width: 30%;
            padding: 20px;
            box-shadow:1px 1px 10px silver;
            margin-top:50px;
        }
        .back{
            text-decoration:none;
            color:black;
            font-weight:bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<center>
    <div class="main">
        <form action="insert_cart.php" method="post">
            <h2>Are you sure to buy this product </h2>
            <input type="text" name="id" value='<?php echo $data['id']?>'>
            <input type="text" name="name"value='<?php echo $data['name']?>'>
            <input type="text" name="price"value='<?php echo $data['price']?>'>
            <button name="add" type="submit" class="btn btn-warning">Confirm</button>
            <br>
            <a class="back" href="shop.php">Back To The Shop</a>
        </form>
    </div>

</center>
    
</body>
</html> 