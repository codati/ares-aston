<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

class Login {

  function getView() {
    if (isset($_SESSION['lastPost'])) {
      \Tools::renderView('login', $_SESSION['lastPost']);
    } else {
      \Tools::renderView('login');
    }
  }

  function connect() {
    $user = false;
    switch ($_POST['type']) {
      case "utilisateur":
        $user = \Model\Utilisateur::getUser($_POST['password'], $_POST['login']);


        break;
      case "chefdeprojet":
        $user = \Model\ChefDeProjet::getChefDeProjet($_POST['password'], $_POST['login']);
        break;
    }

    if ($user) {
      $_SESSION[$_POST['type']] = $user;
      header('Location: dashboard');
    } else {
      $_SESSION['lastPost'] = $_POST;
      header('Location: ./');
    }
  }

}
