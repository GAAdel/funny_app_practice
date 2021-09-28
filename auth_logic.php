<?php

$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);

$mysql = new mysqli("localhost", "root", "", "funny_app");
$mysql->query("SET NAMES 'utf8'");

$password = md5($password . "dsdsf3223");

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();
if (count((array)$user) == 0) {
  echo "Такой пользователь не найден";
  exit();
} else {
  header('Location: menu_page.php');
}

$mysql->close();


