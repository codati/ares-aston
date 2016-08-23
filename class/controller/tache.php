<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

class Tache {

  function getViewAdd() {
    $data['utilisateurs'] = \Model\Utilisateur::getAll();
    \Tools::renderView('addTache', $data);
  }

  function add() {
    var_dump($_POST);

    $tache = new \Model\Tache();
    $tache->setTitre($_POST['titre']);
    $tache->setDescription($_POST['description']);
    $tache->setEcheance($_POST['echeance'] . ' ' .$_POST['hour'] );
    $tache->setTmpRealisation($_POST['tmp-prevision']);
    $tache->setId_utilisateur($_POST['utilisateur']);
    $tache->save();
  }

  function getViewEdit() {
    $data['utilisateurs'] = \Model\Utilisateur::getAll();
    \Tools::renderView('addTache', $data);
  }

  function edit() {
    var_dump($_POST);
  }

}
