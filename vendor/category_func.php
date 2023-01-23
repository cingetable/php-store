<?php
require 'connect.php';

function show_at_index($type) {
    $connect = mysqli_connect('localhost', 'root', '', 'php-shop');
    $query = mysqli_query($connect, "SELECT * FROM `Goods` WHERE `type` = '$type' LIMIT 6");
    return $query;
}
