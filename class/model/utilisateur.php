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

class Utilisateur extends \Model {

  private $id, $password, $login, $lastName, $firstName;

  function getId() {
    return $this->id;
  }

  function getPassword() {
    return $this->password;
  }

  function getLogin() {
    return $this->login;
  }

  function getLastName() {
    return $this->lastName;
  }

  function getFirstName() {
    return $this->firstName;
  }

  private function setId($id) {
    $this->id = $id;
  }

  function setPassword($password) {
    $this->password = $password;
  }

  function setLogin($login) {
    $this->login = $login;
  }

  function setLastName($lastname) {
    $this->lastName = $lastname;
  }

  function setFirstName($firstname) {
    $this->firstName = $firstname;
  }

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
