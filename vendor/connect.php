<?php

    $connect = mysqli_connect('localhost', 'root', '', 'php-shop');

    if (!$connect) {
        die('Error connect to DataBase');
    }