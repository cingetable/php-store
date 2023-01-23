<?php
session_start();
include 'vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!--Обнуление стилей-->
  <link rel="stylesheet" href="css/index.css">
  <!--Обнуление стилей-->
  <!--Стили для шапки-->
  <link rel="stylesheet" href="css/head.css">
  <!--Стили для шапки-->
  <!--Стили для страницы-->
  <link rel="stylesheet" href="css/edit.css">
  <!--Стили для страницы-->
  <!--Для корректной работы медиа запросов-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Для корректной работы медиа запросов-->
  <title>Title</title>
</head>
<body>
<!--Шапка-->
<header>
    <div class="_container">
        <div class="header_container">
            <div class="header_burger">
                <span></span>
            </div>
            <div class="header_home">
                <img src="img/Home.svg" alt="" onclick="document.location.href = 'index.php'">
            </div>
            <div class="header_main" onclick="document.location.href = 'profile.php'">
                <div>
                    <img src="img/Profile.svg" alt="">
                </div>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<p>'.$_SESSION['user']['login'].'</p>';
                }
                else {
                    echo'<p>Войти</p>';
                }
                ?>
            </div>
            <div class="header_basfav">

            </div>
            <div class="header_menu">
                <ul>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo '<li><a href="profile.php">Личный кабинет</a></li>';
                    }
                    else {
                        echo'<li><a href="log.php">Войти</a></li>';
                    }
                    ?>

                    <li><a href="index.php">Главная страница</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--Шапка-->
<div class="mr"></div>
<!--Шапка-->
<main>
  <section class="_container">
    <div class="main_title">
      <p class="title">Edit</p>
      <p class="desc">comfort that everyone needs</p>
    </div>
  </section>
  <div class="main_break"></div>
  <div class="_container">
    <div class="container">
      <form action="vendor/create_good.php" class="edit" method="post" enctype="multipart/form-data">
        <div class="form_in">
          <input type="text" placeholder="Название товара" name="title">
          <input type="text" placeholder="Описание товара" name="description">
        </div>
        <div class="form_in">
          <input type="text" placeholder="Цена товара" name="price">
            <input type="text" placeholder="Тип товара" name="type">
          <input id="ff" type="file" style="display:none;" accept="image/*" placeholder="" name="image">
          <label for="ff" id="text">Выбрать фото</label>
        </div>
        <div class="form_btn">
          <button>Добавить товар</button>
          <a href="#"><p>На главную</p></a>
        </div>
      </form>
    </div>
    <div class="container">
      <!--Позиции, форма для удаления-->
        <?php
            $query = mysqli_query($connect, "SELECT * FROM `Goods`");


            while ($good = mysqli_fetch_assoc($query)) {
                echo '
                <form action="vendor/remove_good.php" class="card" method="post">
                    <div class="line"></div>
                    <div class="all">
                    <div class="left">
                    <div class="img">
                    <!--тут меняй картинку товара-->
                    <img src="'.$good['image'].'" alt="">
                    <input type="text" style="display: none" value="'.$good['image'].'" name="image">
                    <input type="text" style="display: none" value="'.$good['id'].'" name="id">
                    <!--тут меняй картинку товара-->
                    </div>
                    <!--тут меняй название товара-->
                    <p>'.$good['title'].'</p>
                    <!--тут меняй название товара-->
                    </div>
                    <div class="right">
                    <!--тут меняй еешай action на кнопку-->
                    <button>
                <img src="img/Trash.svg" alt="">
                </button>
                 <!--тут меняй еешай action на кнопку-->
                </div>
                </div>
                </form>
                ';
            }
        ?>
    </div>
  </div>
</main>
<!--Скрипт для жизни-->
<script src="jquery.js"></script>
<!--Скрипт для жизни-->
<!--Скрипт для шапки-->
<script src="js/head.js"></script>
<!--Скрипт для шапки-->
<script src="js/edit.js"></script>
</body>
</html>
