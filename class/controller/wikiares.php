<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

/**
 * Description of dashboard
 *
 * @author codati
 */
class Wikiares {

  public function index() {
    $data['tache'] = \Model\Tache::getById($_GET['id']);
    \Tools::renderView('wikiares', $data);
  }

}