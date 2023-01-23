<?php
require_once 'connect.php';


$id = $_POST['id'];
$image = $_POST['image'];

mysqli_query($connect,  "DELETE FROM `Goods` WHERE `image` = '$image'");
unlink($image);
header('Location: ../edit.php');


