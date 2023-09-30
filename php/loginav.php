<?php
       session_start();
       include_once "config.php";
       $email = mysqli_real_escape_string($conn, $_POST['email']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);

       if(!empty($email) && !empty($password)){
            $sql = mysqli_query($conn, "SELECT * from users WHERE email = '{$email}' AND password = '{$password}'");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "Sucesso!";
            }
            else{
                echo "Endereço de email ou senha estão incorretos!";
            }
       }
       else{
        echo "Todas as caixas de login devem ser preenchidas";
       }
?>