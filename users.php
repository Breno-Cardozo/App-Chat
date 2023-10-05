<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

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
        <section class="users">
            <header>
                <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img'] ?>" alt="">
                        <div class="details">
                            <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                            <p><?php echo $row ['status'] ?></p>        
                        </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
            </header> 
            <div class="search">
                <span class="text">Escreva o nome de algum amigo</span>
                <input type="text" placeholder="Insira um nome para pesquisar...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="users-list">
            </div>
        </section>
    </div>
    <script src="js/users.js"></script>
</body>
</html>