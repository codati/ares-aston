<?php
session_start();

require_once '../bootstrap.php';

$bdd = Bdd::getInstence();


require PATH_VIEW.'login.php';
