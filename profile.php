<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: log.php');
}
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
	<link rel="stylesheet" href="css/lich.css">
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
<main>
	<section class="_container">
		<div class="main_title">
			<p class="title">YOUR ACCOUNT</p>
			<p class="desc">comfort that everyone needs</p>
		</div>
	</section>
	<div class="main_line"></div>
	<section class="_container">
		<form action="vendor/update_userdata.php" class="edit" method="get">
			<div class="form_in">
                <label for="" style="font-size: 30px">Логин</label>
				<input type="text" placeholder="логин" value="<?= $_SESSION['user']['login']?>" name="login">
                <label for="" style="font-size: 30px">Новый пароль</label>
				<input type="password" placeholder="Новый пароль" value="<?= $_SESSION['user']['password']?>" name="password">
			</div>
			<!--Вставить, если пользователь админ-->
            <?php
            if ($_SESSION['user']['user_freedom'] === 'admin') {
                echo '
                <a href="edit.php" class="admin">
				<p>Редактировать товары</p>
				<img src="img/Arrow.svg" alt="">
			    </a>
                ';
            }
            ?>
			<!--Вставить, если пользователь админ-->
			<div class="form_btn">
				<button type="submit">Сохранить</button>
				<a href="vendor/logout.php"><p>Выйти из аккаунта</p></a>
			</div>
		</form>
	</section>
</main>
<!--Скрипт для жизни-->
<script src="jquery.js"></script>
<!--Скрипт для жизни-->
<!--Скрипт для шапки-->
<script src="js/head.js"></script>
<!--Скрипт для шапки-->
</body>
</html>
