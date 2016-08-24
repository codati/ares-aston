<?php

require_once '../bootstrap.php';

session_start();

$bdd = Bdd::getInstence();

$routeur = Routeur::getInstence('controllers.php');

$routeur->executeRoute();