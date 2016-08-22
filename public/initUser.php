<?php

require_once '../bootstrap.php';

 Bdd::getInstence()->exec(
         'INSERT INTO `ChefDeProjet` (`password`, `login`) VALUES (\''.password_hash('testtest' ,PASSWORD_DEFAULT).'\', \'test\');'
         ) or die(print_r($db->errorInfo(), true));


 Bdd::getInstence()->exec(
         'INSERT INTO `Utilisateur` (`password`, `login`) VALUES (\''.password_hash('testtest' ,PASSWORD_DEFAULT).'\', \'test\');'
         ) or die(print_r($db->errorInfo(), true));
 
 