<?php

setcookie('user', $user['name'], time() - 3600 * 24, "/");
header('Location: http://localhost/auto.php');

?>
