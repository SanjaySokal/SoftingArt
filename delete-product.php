<?php
    $id = $_GET['id'];
    include 'connection.php';
    session_start();
    if($_SESSION['type'] == '1'){
        $q = $conn->query("DELETE FROM `products` WHERE id = '$id'");
        if ($q == TRUE) {
            header("location: admin-all-products.php");
        }
    } else {
        header("location: login.php");
    }
?>