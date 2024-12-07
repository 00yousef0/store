<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | MY CART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <style>
        body {
    font-family: 'Arial', sans-serif; 
    line-height: 1.6; 
    font-size: 16px; 
}
        table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

th, td {
    padding: 12px 20px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #3498DB;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
}

tr:nth-child(even) {
    background-color: #f4f4f4;
}

tr:hover {
    background-color: #ecf0f1;
}

td a {
    text-decoration: none;
    color: white;
    background-color: #e74c3c;
    padding: 8px 16px;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
}

td a:hover {
    background-color: #c0392b;
}
        main{
            width: 40% ;
        }
        table{
            box-shadow:1px 1px 10px silver
        }
        thead{
            background-color :#3498DB;
            color:white;
        }
.btn-danger {
        background-color: #e74c3c;
        color: white;
        font-weight: bold;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-danger:hover {
        background-color: #c0392b;
        transform: scale(1.05);
    }

    .btn-danger:focus {
        outline: none;
        box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    </style>
</head>
<body>    
    <center>
        <h3>Your Products</h3>
    </center>
    
    <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product name</th>
                        <th scope='col'>Product price</th>
                        <th scope='col'>Delete Product</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('config.php');
                    $result = mysqli_query($con, "SELECT * FROM addcart");
                    while ($row = mysqli_fetch_array($result)) {
                        echo "
                            <tr>
                                <td>$row[name]</td>
                                <td>$row[price]</td>
                                <td><a href='del_cart.php?id=$row[id]' class='btn btn-danger'>DELETE</a></td>
                            </tr>
                        ";
                    }
                    ?>
                    <center>
                        <a href="shop.php">Back</a>
                    </center>
                </tbody>
            </table>
        </main>
    </center>
</body>
</html>
