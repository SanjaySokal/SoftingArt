<?php
    include 'connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];
    $address = $_POST['address'];
    if($password == $con_password){
        $result = $conn->query("SELECT * FROM `user` WHERE `email` = '$email'");
        if ($result->num_rows > 0) {
            echo "<script>alert('user already registered'); window.open('login.php','_self');</script>";
        } else {
            $q = $conn->query("INSERT INTO `user`(`name`, `email`, `phone`, `password`, `address`, `type`) VALUES ('$name','$email','$phone','$password','$address', '0')");
            if($q == TRUE) {
                echo "<script>alert('Registered Successfully!'); window.open('login.php','_self');</script>";
            }
        }
    } else {
        echo "<script>alert('Please enter same password!'); window.history.go(-1);</script>";
    }
?>