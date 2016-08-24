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

  protected $id;

  protected function setId($id) {
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

  public static function getAll($Where = '', $param = array()) {

    $queryString = 'SELECT * FROM `' . self::getTableName() . '`';
    if ($Where != '') {
      $queryString .= ' WHERE ' . $Where;
    }
    $queryString .= ' ;';
    $query = \Bdd::getInstence()->prepare($queryString);
    $query->execute($param) or die(print_r($query->errorInfo(), true));

    $objects = $query->fetchAll(\PDO::FETCH_CLASS, self::getClassName());

    return $objects;
  }

  public static function getById($id) {

    $query = \Bdd::getInstence()->prepare('SELECT * FROM `' . self::getTableName() . '` WHERE `id` = :id');
    $query->bindParam('id', $id);

    $query->execute() or die(print_r($query->errorInfo(), true));
    $object = $query->fetchObject(self::getClassName());

    return $object;
  }

}
