<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of routeur
 *
 * @author codati
 */
class Routeur {

  private static $routeurInstence;
  private $config;

  function __construct($configFile) {

    $this->controller = require PATH_CONFIG . $configFile;
    $this->config = require PATH_CONFIG_PRIVATE . 'config.php';
  }

  /**
   * 
   * @return Routeur
   */
  static function getInstence($configFile) {
    if (!isset(self::$routeurInstence)) {
      self::$routeurInstence = new Routeur($configFile);
    }
    return self::$routeurInstence;
  }

  function executeRoute() {


    $uri = $this->getUri();
    if (isset($this->controller[$_SERVER['REQUEST_METHOD']][$uri])) {

      $configContoller = $this->controller[$_SERVER['REQUEST_METHOD']][$uri];
      $controllerName = 'Controller\\' . $configContoller['controller'];
      $controller = new $controllerName($uri);
      $configContollerAction = $configContoller['action'];
      $controller->$configContollerAction();
    } else {
      throw new Exception($uri . ' not found in config.');
    }
  }

  /**
   * 
   * @return string
   */
  function getUri() {

    $uri = str_replace($this->config['baseUri'], '', $_SERVER['REQUEST_URI']);

    return $uri;
  }

}