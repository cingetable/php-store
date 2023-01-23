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
	<link rel="stylesheet" href="css/cat.css">
	<!--Стили для страницы-->
	<!--Для корректной работы медиа запросов-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Для корректной работы медиа запросов-->
	<title>Your Matresses</title>
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
			<!--Заголовок категории-->
			<p class="title"><?= $_POST['type']?></p>
			<!--Заголовок категории-->
		</div>
	</section>
	<div class="main_line"></div>
	<section class="_container">
		<div class="main">
            <?php
            $type = $_POST['type'];
            $query = mysqli_query($connect, "SELECT * FROM `Goods` WHERE `type` = '$type'");
            while ($good = mysqli_fetch_assoc($query)) {
                echo '
                <form action="vendor/add_to_cart.php" class="card" method="post">
				<div class="img">
					
					<a href="#">
						<img class="_back" src="'.$good["image"].'" alt="">
					</a>
				</div>
				<a href="#"><p class="title">'.$good["title"].'</p></a>
				<p class="desc">'.$good["description"].'</p>
				<p class="cost">'.$good["price"].'p</p>
			</form>
                ';
            }
            ?>


		</div>
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
