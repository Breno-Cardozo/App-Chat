<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/55e75e1d5a.js" crossorigin="anonymous"></script>
    <title>App Chat</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>App Chat</header>
            <form action="users.php" enctype="multipart/form-data">
                <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>Primeiro nome</label>
                            <input type="text" name="fname" placeholder="Primeiro nome" required>
                        </div>
                        <div class="field input">
                            <label>Último nome</label>
                            <input type="text" name="lname" placeholder="Último nome" required>
                        </div>
                    </div>
                        <div class="field input">
                            <label>Endereço de e-mail</label>
                            <input type="text" name="email" placeholder="Entre com seu e-mail" required>
                        </div>
                        <div class="field input">
                            <label>Senha</label>
                            <input type="password" name="password" placeholder="Entre com sua senha" required>
                        </div>
                        <div class="field image">
                            <label for="image">
                                <i class="fa-regular fa-image "></i>    
                                Escolha sua foto de perfil
                            </label>
                            
                            <input type="file" id="image" name="image" required>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Entrar">
                        </div>
            </form>
            <div class="link">Já é cadastrado? <a href="login.php">Faça o Login agora!</a></div>
        </section>
    </div>
    <script src="js/signup.js"></script>
</body>
</html>