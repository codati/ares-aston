<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author codati
 */

namespace Model;

class Utilisateur {

  private $id, $password, $login;

  static public function getUser($pass, $login) {

    $query = \Bdd::getInstence()->prepare('SELECT * FROM `Utilisateur` WHERE `login` = :login');
    $query->bindParam('login', $login);

    $query->execute();
    
    if ($query->rowCount() == 1) {
      $user = $query->fetchObject(__CLASS__);

      if (password_verify($pass, $user->password)) {
        return $user;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
