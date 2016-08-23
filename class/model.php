<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author codati
 */
class Model {
  private function setId($id) {
    $this->id = $id;
  }
  
  function getId() {
    return $this->id;
  }
  
  public static function getClassName() {
    return static::class;
    
  }
  public static function getTableName() {

    return str_replace('Model\\', '', self::getClassName());
  }

  public static function getAll() {

    $query = \Bdd::getInstence()->prepare('SELECT * FROM `'. self::getTableName().'`');

    $query->execute();
    $objects = $query->fetchAll(\PDO::FETCH_CLASS, self::getClassName());

    return $taches;
  }

  public static function getById($id) {

    $query = \Bdd::getInstence()->prepare('SELECT * FROM `'. self::getTableName().'` WHERE `id` = :id');
    $query->bindParam('id', $id);

    $query->execute();
    $tache = $query->fetchObject(self::getClassName());

    return $tache;
  }

}
