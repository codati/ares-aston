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
    if (isset($_SESSION['utilisateur'])) {
      $id_utilisateur = $_SESSION['utilisateur']->getId();
    } else {
      $id_utilisateur = $_GET['id'];
    }
    $taches = \Model\Tache::getAll('YEARWEEK(CURRENT_TIMESTAMP())  = YEARWEEK(`echeance`) AND `id_utilisateur` = :utilisateur ORDER BY `echeance`', array('utilisateur' => $id_utilisateur));
    $data['taches'] [0] = [];
    $data['taches'] [1] = [];
    $data['taches'] [2] = [];
    $data['taches'] [3] = [];
    $data['taches'] [4] = [];
    $data['taches'] [5] = [];



    foreach ($taches as $tache) {
      $date = new \DateTime($tache->getEcheance());
      $data['taches'] [$date->format('N')] [] = $tache;
    }

    \Tools::renderView('planning', $data);
  }

}
