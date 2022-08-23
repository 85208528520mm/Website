<?php
$login= filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass= filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass= md5($pass."woqkrow23134");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

$result=$mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user)==0) {
echo "Пароль или Имя не верны";
exit();
}

setcookie('user', $user['name'], time() + 3600 * 24, "/");

$mysql->close();

header('Location: http://localhost/auto.php');

?>
