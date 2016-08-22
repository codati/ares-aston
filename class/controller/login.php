<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

class Login {

  function getView() {
    require PATH_VIEW . 'login.php';
  }

  function connect() {
    $user = \Model\Utilisateur::getUser($_POST['password'], $_POST['login']);

    if ($user) {
      var_dump($user);
      $_SESSION['user'] = $user;
      header('Location: dashboard');
    } else {
      header('Location: ');
    }
  }

}
