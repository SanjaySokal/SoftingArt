<?php
    $id = $_GET['id'];
    include 'connection.php';
    session_start();
    if(isset($_SESSION['user'])){
        $q = $conn->query("INSERT INTO cart(product_id, costumer_email, total) VALUES ('$id','".$_SESSION['user']."','1')");
        if ($q == TRUE) {
            header("location: cart.php");
        }
    } else {
        header("location: login.php");
    }
?>