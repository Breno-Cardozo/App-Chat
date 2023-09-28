<?php
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if(!$conn){
        echo "Database conectado" .mysqli_connect_error();
    }
?>