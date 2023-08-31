<?php
    $user_id = $_GET['user_id'];
    $id = $_GET['id'];
    $connect = mysqli_connect('localhost', 'root', '', 'sweetshop');
    
    $user = mysqli_query($connect, "UPDATE `users` SET `working` = 'not working' WHERE `users`.`id` = '$user_id'");
    #echo $user['id'];
    header("Location: employee_list.php?id=".urlencode($id))
?>