<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/s.css">
  <link rel="stylesheet" href="<https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
 <title>Авторизация</title>
</head>
<body>
	<header>
		<div id="big">
	<div class="container mt-4">
		<div class="row">
			<center>
				<h3><img src="/img/9.png" alt="Шапка" title="Шапка">&nbsp&nbsp&nbsp&nbsp
					<a href="/" title="Перейти на главну">Реестр акционеров&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

					<a href="about.php">О нас</a> |<a href="feedback.php"> Обратная связь&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>

									<a href="check.php">Регистрация </a>|<a href="auto.php"> Авторизация</a>
						<br>			</h3>
</center>
</div>
</div>
</header><br>


<?php
if($_COOKIE['user'] == ''):

?>

<div class="row">
<div class="col">
<h2> Вход </h2>
<form action="auth2.php" method="post">
<input type="text" class="from-control" name="login" id="login" placeholder="Введите логин"><br><br>
<input type="password" class="from-control" name="pass" id="pass" placeholder="Введите пароль"><br><br>
<button class="btn btn-success" type="submit">Войти</button>
</form>
</div>
<?php endif;?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
<div id="social">
  <a href="http://vk.com" title="Группа в ВК" target="_blank">
    <img src="/img/vk.png" alt="ВК" title="ВК"> </a>&nbsp;&nbsp;&nbsp;
  <a href="http://facebook.com" title="Группа в Facebook" target="_blank">
    <img src="/img/facebook.png" alt="Facebook" title="Facebook"> </a>&nbsp;&nbsp;&nbsp;
  <a href="http://instagram.com" title="Группа в instagram" target="_blank">
    <img src="/img/instagram.png" alt="instagram" title="instagram"> </a>&nbsp;&nbsp;&nbsp;
  <a href="http://twitter.com" title="Группа в twitter" target="_blank">
    <img src="/img/twitter.png" alt="twitter" title="twitter"> </a>&nbsp;&nbsp;&nbsp;
</div>
<div id="rights">Все права защищены &copy; 2021</div>
</footer>
</body>
</html>
