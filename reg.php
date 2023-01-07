<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--Обнуление стилей-->
	<link rel="stylesheet" href="css/index.css">
	<!--Обнуление стилей-->
	<!--Стили для страницы-->
	<link rel="stylesheet" href="css/reg.css">
	<!--Стили для страницы-->
	<!--Шрифты-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!--Шрифты-->
	<title>регистрация</title>
</head>
<body>
<!--Регистрация-->
	<main>
		<section class="_container">
			<div class="reg_title">
				<p class="title">YOUR MATTERS</p>
				<p class="desc">comfort that everyone needs</p>
			</div>
		</section>
		<div class="reg_line"></div>
		<section class="_container">
			<form action="vendor/signup.php" class="reg_form" method="post">
				<div class="form_in">
					<p class="title">Регистрация</p>
					<input type="text" placeholder="Почти или телефон" name="login">
					<input type="password" placeholder="Пароль" name="password">
					<input type="password" placeholder="Подтверждение пароля" name="password_confirm">
				</div>
				<div class="form_btn">
					<button type="submit">Зарегистрироваться</button>
					<a href="auth.php"><p>Войти</p></a>
				</div>
			</form>
		</section>
	</main>
<!--Регистрация-->
</body>
</html>
