<?php
    include 'connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = $conn->query("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
    if ($result->num_rows > 0) {
        session_start();
        while($row = $result->fetch_assoc()) {
            $_SESSION['user'] = $email;
            $_SESSION['type'] = $row['type'];
            header("location: index.php");
        }
    } else {
        echo "not registered";
    }
?>