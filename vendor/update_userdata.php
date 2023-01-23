<?php
session_start();
include 'connect.php';

$user_id = $_SESSION['user']['id'];
$login = $_GET['login'];
$password = $_GET['password'];

$password_safe= md5($password);

$_SESSION['user']['login'] = $login;
$_SESSION['user']['password'] = $password;
$query = "UPDATE `Users` SET `login` = '$login', `password` = '$password_safe'";
$query = mysqli_query($connect, $query);

header('Location: ../profile.php');


