<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if ($password_confirm === '') {
    $error_fields[] = 'password_confirm';
}
if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
    ];

    echo json_encode($response);
    die();
}


    if ($password === $password_confirm) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($connect, "INSERT INTO `Users` (`id`, `login`, `password`, `user_freedom`) VALUES (NULL, '$login', '$password', 'user')");
        $response = [
            "status" => true,
        ];

        echo json_encode($response);
    } else {
        $response = [
            "status" => false,
            "message" => "Пароли не совпадают",
        ];

        echo json_encode($response);
    }

?>
