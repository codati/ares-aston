<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tools
 *
 * @author codati
 */
class Tools {

  static function renderView($nameView) {
    require PATH_VIEW . $nameView . '.php';
  }

}
