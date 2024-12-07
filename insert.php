<?php
include('config.php');

if (isset($_POST['upload'])) {
    $NAME = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $image_location = $image['tmp_name'];
        $image_name = $image['name'];
        $image_up = "images/" . $image_name;

        $insert = "INSERT INTO prod (name, price, image) VALUES ('$NAME', '$price', '$image_up')";

        if (mysqli_query($con, $insert)) {
            if (move_uploaded_file($image_location, $image_up)) {
                echo "<script>alert('DONE');</script>";
            } else {
                echo "<script>alert('Error in uploading the file');</script>";
            }
        } else {
            echo "<script>alert('Error in database insertion');</script>";
        }
    } else {
        echo "<script>alert('No file uploaded');</script>";
    }
    header('location:index.php');
}
?>
