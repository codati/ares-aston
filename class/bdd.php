<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bdd
 *
 * @author codati
 */
class Bdd {

  private static $bddInstence;
  private $bdd;
  private $config;

  function __construct() {

    $this->config = require PATH_CONFIG_PRIVATE . 'bdd.php';

    $this->bdd = new PDO('mysql:host=localhost;dbname=' . $this->config['bddName'], $this->config['user'], $this->config['password']);
  }

  static function getInstence() {
    if (!isset(self::$bddInstence)) {
      self::$bddInstence = new Bdd();
    }
    return self::$bddInstence->bdd;
  }

}
