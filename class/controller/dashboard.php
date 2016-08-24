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
class Dashboard {

  public function index() {
    $data['taches'] =  \Model\Tache::getAll();
    $data['messages'] = $_SESSION['messages'];
    \Tools::renderView('dashboard',$data);
    
    
     $_SESSION['messages'] = [];
//    
//    $tache = new \Model\Tache();
//    $tache->setTitre('test');
//    $tache->setEtat('enCours');
//    $tache->setTmpRealisation(10);
//    $tache->setEcheance(time());
//    $tache->setDescription('test');
//    $tache->setId_utilisateur(1);
//    $tache->save();
//
//
//
//    $tache = \Model\Tache::getbyId('1');
//    $tache->setTitre('LOL');
//    $tache->setTitre('the Description');
//    $tache->save();
  }

}
