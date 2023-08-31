<?php
    $login = $_POST['login'];
    $password = $_POST['password'];

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connect = mysqli_connect('localhost', 'root', '', 'sweetshop');
    

    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' and `password` = '$password'");
    $user = mysqli_fetch_assoc($user);

    if ($user === NULL) {
        header('Location: /auth.php');
    } else {
            session_start();
            $id = $user['id'];
            header('Location: admin.php');
    }
?>