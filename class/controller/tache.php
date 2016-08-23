<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

class Tache {

  function getView() {
    $data['utilisateurs'] = \Model\Utilisateur::getAll();
    \Tools::renderView('addTache',$data);
  }

}
