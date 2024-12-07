<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Clinet Side</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <style>
        .card{
            float: right;
            margin-top:19px;
            margin-left:18px;
            margin-right:12px;
            height: 300px;        
        }
        main{
            width:60%;
        }
        .navbar-brand{
            margin-left:80px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="card.php">MY Cart</a>

    </nav>
    <center>
        <h3>
            All Products
        </h3>
    </center>
    <?php
    include('config.php');
    $result= mysqli_query($con, "SELECT * FROM prod");
    While($row= mysqli_fetch_array($result))
    {
        echo "
        <center>
            <main>
              <div class='card' style='width: 18rem;'>
                <img src='$row[image]' class='card-img-top' style='height: 54%;'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='val.php?id=$row[id]' class='btn btn-success'>Add to the cart</a>
                </div>
             </div>
            </main>
        </center>
        ";
    }
    ?>

</body>
</html>
