<?php
    session_start();
    if(!isset($_SESSION ['unique_id'])){
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
        <section class="chat-area">
            <header>
                <?php
                    include_once "php/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$user_id}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <a href="users.php" class="back-icon"><i class="fa-solid fa-circle-arrow-left" style="color: #bce6e2;"></i></a>
                <img src="php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                        <p><?php echo $row ['status'] ?></p>        
                    </div>
            </header> 
            <div class="chat-box">
            </div>
    <form action="#" class="typing-area">
        <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
        <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Escreva sua mensagem aqui...">
        <button><i class="fa-brands fa-telegram" style="color: #bce6e2;"></i></button>
    </form>
        </section>
    </div>


    <script src="js/chat.js"></script>
</body>
</html>