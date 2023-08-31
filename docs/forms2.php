<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $connect = mysqli_connect('localhost', 'root', '', 'sweetshop');
    $user = mysqli_query($connect, "INSERT INTO `forms` (`name`, `phone`, `email`) VALUES ('$name', '$phone', '$email');");
    
    
    /*
    $mysql = new mysqli('localhost','root','','sweetshop');
    $mysql->query("INSERT INTO `forms` (name, phone, mail ) 
    VALUES('$name','$phone', '$email')");
    $mysql->close();
    */
    header("Location: Uslugi.php");
?>