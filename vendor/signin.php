<?php

session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

}


$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    if (!password_verify($_POST['password'], $user['password'])) {
        $response = [
            "status" => false,
            "message" => "Неверный логин и пароль",
        ];
        echo json_encode($response);
    } else {
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "password" => $_POST['password'],
            "user_freedom" => $user['user_freedom'],
        ];

        $response = [
            "status" => true
        ];

        echo json_encode($response);


    }



} else {

    $response = [
        "status" => false,
        "message" => 'Не верный логин или пароль'
    ];

    echo json_encode($response);
}
?>
