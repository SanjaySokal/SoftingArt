<?php
    include 'connection.php';
    $id = $_GET['id'];
    session_start();
    $q = $conn->query("DELETE FROM cart WHERE product_id = $id AND costumer_email = '".$_SESSION['user']."'");
    if ($q == TRUE) {
        header("location: cart.php?removed=true");
    } else {
        header("location: cart.php?removed=false");
    }
?>