<?php

namespace Controller;

/**
 * Description of dashboard
 *
 * @author codati
 */
class Userboard {

  public function index() {
    $data['utilisateurs'] = \Model\Utilisateur::getAll();
    \Tools::renderView('userboard', $data);
  }

  public function viewPlanning() {
    $data['messages'] = $_SESSION['messages'];
    \Tools::renderView('planning',$data);
  }
    


}
