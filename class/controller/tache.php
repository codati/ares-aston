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

    $tache = new \Model\Tache();
    $tache->setTitre($_POST['titre']);
    $tache->setDescription($_POST['description']);
    $tache->setEcheance($_POST['echeance'] . ' ' . $_POST['hour']);
    $tache->setTmpRealisation($_POST['tmp-prevision']);
    $tache->setId_utilisateur($_POST['utilisateur']);
    $tache->save();
    $_SESSION['messages']['addTache'] = true;

    header('Location: dashboard');
  }

  function getViewEdit() {
    $data['utilisateurs'] = \Model\Utilisateur::getAll();
    $data['tache'] = \Model\Tache::getById($_GET['id']);
    $data['tacheDate'] = new \DateTime($data['tache']->getEcheance());
    \Tools::renderView('updateTache', $data);
  }

  function edit() {
    $tache = \Model\Tache::getById($_POST['id']);
    $tache->setTitre($_POST['titre']);
    $tache->setDescription($_POST['description']);
    $tache->setEcheance($_POST['echeance'] . ' ' . $_POST['hour']);
    $tache->setTmpRealisation($_POST['tmp-prevision']);
    $tache->setId_utilisateur($_POST['utilisateur']);
    $tache->save();
    $_SESSION['messages']['editTache'] = true;


    header('Location: dashboard');
  }

  function statusChange() {
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE); //convert JSON into array
    var_dump($input);
    $tache = \Model\Tache::getById($input['idTache']);
    $tache->setEtat($input['etat']);
    $tache->setTmpReel($input['tmpReel']);
    if ($input['etat'] == 'enCours') {

      $tache->setDateStart(date('Y-m-d H:i:s'));
      var_dump($tache);
    }
    $tache->save();
    
  }

  function delete() {
    $tache = \Model\Tache::getById($_GET['id']);
    $tache->delete();
    $_SESSION['messages']['deleteTache'] = true;

    header('Location: dashboard');
  }

}
