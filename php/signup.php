    <?php
        session_start();
        include_once "config.php";
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        if(!empty($fname) && !empty($lname)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //Checagem se o email é válido
            //Checagem se o email esta presente no banco de dados
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){//Se o email já existe
                echo "Esse endereço de email já foi cadastrado em nosso banco de dados: $email";
            }
            else{
                //Checagem de upload da foto
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $tmp_type = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.', $img_name);
                    $img_ext = end ($img_explode);

                    $extensions = ['png', 'jpeg', 'jpg'];
                    if(in_array($img_ext, $extensions) === true){
                        $time = time();

                        $new_img_name = $time.$img_name;

                        if(move_uploaded_file($tmp_type, "images/".$new_img_name)){
                            $status = "Online Agora";
                            $random_id = rand(time(), 10000000);

                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                                    VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            if ($sql2){
                                $sql3 =  mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "Sucesso!";
                                }
                            }
                            else{
                                echo"Alguma coisa aconteceu errado...";
                            }
                        }

                    }
                    else{
                        echo "Por favor insira uma imagem compatível: jpeg, png, jpg!";
                    }
                }
                else{
                    echo "Por favor não esqueça de fazer o upload da sua foto!";
                }
            }
            }
            else{
                echo "Esse endereço de email não é válido: '$email'";
            }
        }
        else{
            echo "Todos os campos devem estar preenchidos!";
        }
    ?>