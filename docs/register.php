<?php
    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $id = $_POST['my_id'];
    #$imagename = $_FILES['photo']['name'];
    $image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));

    if (strlen($login) < 4) {
        header("Location: /docs/registration.php?error=1&id=".urlencode($id));
    } else if (strlen($password) < 5) {
        header("Location: /docs/registration.php?error=2&id=".urlencode($id));
    }
    else {
        $connect = mysqli_connect('localhost', 'root', '', 'sweetshop');
        if (!$image) {
            $user = mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `photo_file`, `role_id`) VALUES (NULL, '$name', '$login', '$email', '$password', NULL, '$role');");
            header("Location: /docs/registration.php?success=1&id=".urlencode($id));
        } else {
            $user = mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `photo_file`, `role_id`) VALUES (NULL, '$name', '$login', '$email','$password', '$image', '$role');");
            header("Location: /docs/registration.php?success=1&id=".urlencode($id));
        }
    }
?>