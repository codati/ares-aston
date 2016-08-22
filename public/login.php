<?php

session_start();

require_once '../bootstrap.php';
$user = Model\Utilisateur::getUser($_POST['password'], $_POST['login']);

if ($user) {
  var_dump($user);
  $_SESSION['user'] = $user;
  header('Location: dashboard.php');
} else {
  header('Location: index.php');
}
