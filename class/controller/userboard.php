<?php

namespace Controller;

/**
 * Description of dashboard
 *
 * @author codati
 */
class Userboard {

  public function index() {
    $data['messages'] = $_SESSION['messages'];
    \Tools::renderView('userboard',$data);
    
    
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

  public function viewPlanning() {
    $data['messages'] = $_SESSION['messages'];
    \Tools::renderView('planning',$data);
  }
    


}
