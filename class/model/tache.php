<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;

/**
 * Description of tache
 *
 * @author codati
 */
class Tache {

  private $id;
  private $id_utilisateur;
  private $titre;
  private $description;
  private $echeance;
  private $tmpRealisation;
  private $tmpReel;
  private $etat;

  function getId() {
    return $this->id;
  }

  function getId_utilisateur() {
    return $this->id_utilisateur;
  }

  function getTitre() {
    return $this->titre;
  }

  function getDescription() {
    return $this->description;
  }

  function getEcheance() {
    return $this->echeance;
  }

  function getTmpRealisation() {
    return $this->tmpRealisation;
  }

  function getTmpReel() {
    return $this->tmpReel;
  }

  function getEtat() {
    return $this->etat;
  }

  private function setId($id) {
    $this->id = $id;
  }

  function setId_utilisateur($id_utilisateur) {
    $this->id_utilisateur = $id_utilisateur;
  }

  function setTitre($titre) {
    $this->titre = $titre;
  }

  function setDescription($description) {
    $this->description = $description;
  }

  function setEcheance($echeance) {
    $this->echeance = $echeance;
  }

  function setTmpRealisation($tmpRealisation) {
    $this->tmpRealisation = $tmpRealisation;
  }

  function setTmpReel($tmpReel) {
    $this->tmpReel = $tmpReel;
  }

  function setEtat($etat) {
    $this->etat = $etat;
  }

  public static function getAll() {

    $query = \Bdd::getInstence()->prepare('SELECT * FROM `Tache`');

    $query->execute();
    $taches = $query->fetchAll(\PDO::FETCH_CLASS, __CLASS__);

    var_dump($taches);
    return $taches;
  }

  public static function getbyId($id) {

    $query = \Bdd::getInstence()->prepare('SELECT * FROM `Tache` WHERE `id` = :id');
    $query->bindParam('id', $id);

    $query->execute();
    $tache = $query->fetchObject( __CLASS__);

    var_dump($tache);
    return $tache;
  }
  public function update() {

    $query = \Bdd::getInstence()->prepare(
            'UPDATE `Tache` SET `id_utilisateur` = :id_utilisateur, `titre` = :titre, `description` = :description, `echeance` = :echeance, `tmpRealisation` = :tmpRealisation, `tmpReel` = :tmpReel, `etat` = :etat WHERE `id` = :id;'
    );
    $query->bindParam('description', $this->getDescription());
    $query->bindParam('echeance', $this->getEcheance());
    $query->bindParam('etat', $this->getEtat());
    $query->bindParam('id', $this->getId());
    $query->bindParam('id_utilisateur', $this->getId_utilisateur());
    $query->bindParam('titre', $this->getTitre());
    $query->bindParam('tmpRealisation', $this->getTmpRealisation());
    $query->bindParam('tmpReel', $this->getTmpReel());

    $query->execute();
  }

  public function save() {
    if (isset($this->id)) {
      $this->update();
    } else {
      $this->insert();
    }
  }

  public function insert() {

    $query = \Bdd::getInstence()->prepare(
            'INSERT INTO `Tache` (`id_utilisateur`, `titre`, `description`, `echeance`, `tmpRealisation`, `tmpReel`, `etat`) VALUES (:id_utilisateur, :titre, :description,:echeance, :tmpRealisation, :tmpReel, :etat);'
    )or die(print_r(\Bdd::getInstence()->errorInfo(), true));
    $query->bindParam('description', $this->getDescription());
    $query->bindParam('echeance', $this->getEcheance());
    $query->bindParam('etat', $this->getEtat());
    $query->bindParam('id_utilisateur', $this->getId_utilisateur());
    $query->bindParam('titre', $this->getTitre());
    $query->bindParam('tmpRealisation', $this->getTmpRealisation());
    $query->bindParam('tmpReel', $this->getTmpReel());
    var_dump($query);
    $query->execute()  or die(print_r($query->errorInfo(), true));


    $this->setId(\Bdd::getInstence()->lastInsertId());
  }

}
