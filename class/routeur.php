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
  static function getInstence($configFile = 'controllers.php') {
    if (!isset(self::$routeurInstence)) {
      self::$routeurInstence = new Routeur($configFile);
    }
    return self::$routeurInstence;
  }

  function executeRoute() {


    $uri = $this->getUri();
    if (isset($this->controller[$_SERVER['REQUEST_METHOD']][$uri])) {


      $configContoller = $this->controller[$_SERVER['REQUEST_METHOD']][$uri];
      // var_dump($_SESSION['auth'][$configContoller['auth']]);
      // var_dump($configContoller['auth']);
      //  var_dump($configContoller);
      if (isset($configContoller['auth']) AND ! $_SESSION['auth'][$configContoller['auth']]) {
        $configContoller = $this->controller['default'];
      }

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



    // var_dump(pathinfo($_SERVER['REQUEST_URI']));
    $uri = str_replace($this->config['baseUri'], '', $_SERVER['REQUEST_URI']);
    $uri = str_replace('?' . $_SERVER['QUERY_STRING'], '', $uri);

    return $uri;
  }

  function getBaseUrl() {
    return $this->config['baseUri'];
  }

}
