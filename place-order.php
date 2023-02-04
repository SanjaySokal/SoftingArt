<?php
    session_start();
    $id = $_GET['id'];
    $email = $_SESSION['user'];
    include 'connection.php';
    date_default_timezone_set("Asia/Calcutta");
    $date = date('d-m-Y H:i:s');

    $sql = "INSERT INTO `orders`(`email`, `product_id`, `delivered`, `date`) VALUES ('$email','$id','0','$date')";
    if ($conn->query($sql) == TRUE) {
        $sql2 = "DELETE FROM `cart` WHERE `costumer_email` = '$email' && `product_id` = '$id'";
        if ($conn->query($sql2) == TRUE) {
            header("location: order-placed.php");
            // echo "success";
        } else {
            // echo "failed";
            header("location: order-failed.php");
        }
    } else {
        header("location: order-failed.php");
    }
?>