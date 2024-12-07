<?php
include('config.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = mysqli_prepare($con, "DELETE FROM addcart WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id); // ربط المعامل $id
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('Location: cart.php');
        exit;
    } else {
        echo "Error deleting item.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Invalid ID.";
}
?>
