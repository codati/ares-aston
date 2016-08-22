<?php

session_start();

require_once '../bootstrap.php';

$bdd = Bdd::getInstence();

$routeur = Routeur::getInstence('controllers.php');

$routeur->executeRoute();