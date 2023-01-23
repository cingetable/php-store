<?php

    $connect = mysqli_connect('192.168.1.144', 'root', '', 'php-shop');

    if (!$connect) {
        die('Error connect to DataBase');
    }