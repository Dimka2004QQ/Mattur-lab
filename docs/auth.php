<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <script src="js/password.js"></script>
    <link rel="icon" href="images/favv.ico" type="image/x-icon">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

    <div class="wrapper">
        <div class="content">
            <div class="auth">
                <form action="login.php" method="post">
                    <label class="login">Логин</label>
                    <input type="text" name="login" placeholder="Введите логин" required>
                    <label class="login">Пароль</label>
                    <div class="field">
                        <input type="password" name="password" id="password-input" placeholder="Введите пароль" required>
                        <a href="#" class="password-control" onclick="return showPassword(this)"></a>
                    </div>
                    <div class="error">
                    <?php
                        if ($_GET['error']) {
                            echo $_GET['error'];
                        }
                    ?>
                    </div>
                    <button type="submit" class="auth__button">Войти</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>