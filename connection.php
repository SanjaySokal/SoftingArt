<?php
    $conn = new mysqli("localhost", "root", "", "softingart");
    if(!$conn){
        echo "failed to connect";
    }
?>