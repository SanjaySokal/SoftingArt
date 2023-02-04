<?php
    include "connection.php";
    session_start();
    $id = $_GET["id"];
    $email = $_SESSION["user"];
    date_default_timezone_set("Asia/Calcutta");
    $date = date('d-m-Y H:i:s');
    $sql = "UPDATE orders SET cancel='1', delever_date='$date' WHERE id = '$id' && email = '$email'"; echo $sql;
    if ($conn->query($sql)) { header("location: order.php"); echo "success"; } else { header("location: order.php"); echo "failed";}
?>