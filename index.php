<?php
session_start();
require_once 'vendor/connect.php';
require_once 'vendor/category_func.php';
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
	<link rel="stylesheet" href="css/glav.css">
	<!--Стили для страницы-->
	<!--Для корректной работы медиа запросов-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Для корректной работы медиа запросов-->
	<!--Шрифты-->
<!--		<link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--		<link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">-->
<!--		<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">-->
<!--		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">-->
	<!--Шрифты-->
	<title>YOUR MATTERS - Главная</title>
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
			<p class="title">YOUR MATTERS</p>
			<p class="desc">comfort that everyone needs</p>
		</div>
	</section>


	
	<section class="_container">
		<div class="container">
			<!--Матрасы-->
			<div class="block">
				<div class="main_line"></div>
				<div class="cat">
					<p class="title">Mattresses</p>
				</div>
				<div class="main_line"></div>
				<div class="set">
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM `Goods` WHERE `type` = 'matrass' LIMIT 6");
                    while ($good = mysqli_fetch_assoc($query)) {
                        echo '
                        <!--Эта штука должна быть кратна 3!!!!!!!!!!-->
					<div class="c1">
						<div class="img">
							<img src="'.$good["image"].'" alt="">
						</div>
						<p class="title">'.$good["title"].'</p>
						<p class="desc">'.$good["description"].'</p>
						<p class="cost">'.$good["price"].'P</p>
					</div>
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
                        ';
                    }
                    ?>

				</div>
				<button class="btn" id="btn_c1">Смотреть больше</button>
                <form action="category.php" method="post">
                    <input type="text" value="matrass" style="display: none" name="type">
                    <input class="btn" id="a1" type="submit" value="Показать все">
                </form>

			</div>
			<!--Матрасы-->
			
			<!--Подушки-->
			<div class="block">
				<div class="main_line"></div>
				<div class="cat">
					<p class="title">Pillows</p>
				</div>
				<div class="main_line"></div>
				<div class="set">
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM `Goods` WHERE `type` = 'pillow' LIMIT 6");
                    while ($good = mysqli_fetch_assoc($query)) {
                        echo '
                        <!--Эта штука должна быть кратна 3!!!!!!!!!!-->
					<div class="c2">
						<div class="img">
							<img src="'.$good["image"].'" alt="">
						</div>
						<p class="title">'.$good["title"].'</p>
						<p class="desc">'.$good["description"].'</p>
						<p class="cost">'.$good["price"].'P</p>
					</div>
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
                        ';
                    }
                    ?>
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
				</div>
                <button class="btn" id="btn_c2">Смотреть больше</button>
                <form action="category.php" method="post">
                    <input type="text" value="pillow" style="display: none" name="type">
                    <input class="btn" id="a2" type="submit" value="Показать все">
                </form>
			</div>
			<!--Подушки-->
			
			<!--Текстиль-->
			<div class="block">
				<div class="main_line"></div>
				<div class="cat">
					<p class="title">Textile</p>
				</div>
				<div class="main_line"></div>
				<div class="set">
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM `Goods` WHERE `type` = 'textile' LIMIT 6");
                    while ($good = mysqli_fetch_assoc($query)) {
                        echo '
                        <!--Эта штука должна быть кратна 3!!!!!!!!!!-->
					<div class="c3">
						<div class="img">
							<img src="'.$good["image"].'" alt="">
						</div>
						<p class="title">'.$good["title"].'</p>
						<p class="desc">'.$good["description"].'</p>
						<p class="cost">'.$good["price"].'P</p>
					</div>
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
                        ';
                    }
                    ?>

					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
				</div>
                <button class="btn" id="btn_c3">Смотреть больше</button>
                <form action="category.php" method="post">
                    <input type="text" value="textile" style="display: none" name="type">
                    <input class="btn" id="a3" type="submit" value="Показать все">
                </form>
			</div>
			<!--Текстиль-->
			
			<!--Акссесуары-->
			<div class="block">
				<div class="main_line"></div>
				<div class="cat">
					<p class="title">Accessories</p>
				</div>
				<div class="main_line"></div>
				<div class="set">
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM `Goods` WHERE `type` = 'extra' LIMIT 6");
                    while ($good = mysqli_fetch_assoc($query)) {
                        echo '
                        <!--Эта штука должна быть кратна 3!!!!!!!!!!-->
					<div class="c4">
						<div class="img">
							<img src="'.$good["image"].'" alt="">
						</div>
						<p class="title">'.$good["title"].'</p>
						<p class="desc">'.$good["description"].'</p>
						<p class="cost">'.$good["price"].'P</p>
					</div>
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
                        ';
                    }
                    ?>
					<!--Эта штука должна быть кратна 3!!!!!!!!!!-->
				</div>
                <button class="btn" id="btn_c4">Смотреть больше</button>
                <form action="category.php" method="post">
                    <input type="text" value="matrass" style="display: none" name="type">
                    <input class="btn" id="a4" type="submit" value="Показать все">
                </form>
			</div>
			<!--Акссесуары-->
			
		</div>
	</section>
	
</main>

<!--Скрипт для жизни-->
<script src="js/jquery.js"></script>
<!--Скрипт для жизни-->
<!--Скрипт для шапки-->
<script src="js/head.js"></script>
<!--Скрипт для шапки-->
<!--Скрипт для главной-->
<script src="js/glav.js"></script>
<!--Скрипт для главной-->
</body>
</html>
