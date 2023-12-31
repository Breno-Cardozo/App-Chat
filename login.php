<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>App Chat</title>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>App Chat</header>
            <form action="#">
                <div class="error-txt"></div>
                        <div class="field input">
                            <label>Endereço de e-mail</label>
                            <input type="text" name="email" placeholder="Entre com seu e-mail">
                        </div>
                        <div class="field input">
                            <label>Senha</label>
                            <input type="password" name="password" placeholder="Entre com sua senha">
                        </div>
                        <div class="field button">
                            <input type="submit" value="Entrar">
                        </div>
            </form>
            <div class="link">Ainda não é cadastrado? <a href="index.php">Cadastre-se agora</a></div>
        </section>
    </div>
    <script src="js/login.js"></script>
</body>
</html>