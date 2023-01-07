<?php

    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `Users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password', 'user')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../auth.php');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../reg.php');
    }

?>
