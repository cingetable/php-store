<?php
require_once 'connect.php';
function can_upload($file){
    // если имя пустое, значит файл не выбран
    if($file['name'] == '')
        return 'Вы не выбрали файл.';

    /* если размер файла 0, значит его не пропустили настройки
    сервера из-за того, что он слишком большой */
    if($file['size'] == 0)
        return 'Файл слишком большой.';

    // разбиваем имя файла по точке и получаем массив
    $getMime = explode('.', $file['name']);
    // нас интересует последний элемент массива - расширение
    $mime = strtolower(end($getMime));
    // объявим массив допустимых расширений
    $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

    // если расширение не входит в список допустимых - return
    if(!in_array($mime, $types))
        return 'Недопустимый тип файла.';

    return true;
}

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$type = $_POST['type'];
$image = $_FILES['image'];

if (!isset($image) || $title === '' || $description === '' || $price === '' ||  $type === '') {
    header('Location: ../edit.php');
} else {
    $check = can_upload($image);
    if ($check === true) {
        $name = mt_rand(0, 10000) . $image['name'];
        $path = '../goods/' . $name;
        move_uploaded_file($image['tmp_name'], $path);
        mysqli_query($connect, "INSERT INTO `Goods` (title,description, type, image, price) VALUES ('$title', '$description', '$type', '$path', '$price')");
        header('Location: ../edit.php');
    }
}

