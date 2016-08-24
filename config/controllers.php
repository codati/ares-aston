<?php
// default
$controller['default']['controller'] = 'Login';
$controller['default']['action'] = 'getView';

// Login
$controller['GET']['/']['controller'] = 'Login';
$controller['GET']['/']['action'] = 'getView';


$controller['POST']['/login']['controller'] = 'Login';
$controller['POST']['/login']['action'] = 'connect';


// dashbord
$controller['GET']['/dashboard']['controller'] = 'Dashboard';
$controller['GET']['/dashboard']['action'] = 'index';
$controller['GET']['/dashboard']['auth'] = 'utilisateur';

// details
$controller['GET']['/details']['controller'] = 'Details';
$controller['GET']['/details']['action'] = 'index';
$controller['GET']['/details']['auth'] = 'utilisateur';

// addTache
$controller['GET']['/addTache']['controller'] = 'tache';
$controller['GET']['/addTache']['action'] = 'getViewAdd';
$controller['GET']['/addTache']['auth'] = 'chefdeprojet';

$controller['POST']['/addTache']['controller'] = 'tache';
$controller['POST']['/addTache']['action'] = 'add';
$controller['POST']['/addTache']['auth'] = 'chefdeprojet';

// editTache
$controller['GET']['/editTache']['controller'] = 'tache';
$controller['GET']['/editTache']['action'] = 'getViewEdit';
$controller['GET']['/editTache']['auth'] = 'chefdeprojet';

$controller['POST']['/editTache']['controller'] = 'tache';
$controller['POST']['/editTache']['action'] = 'edit';
$controller['POST']['/editTache']['auth'] = 'chefdeprojet';

$controller['POST']['/statusChange']['controller'] = 'tache';
$controller['POST']['/statusChange']['action'] = 'statusChange';
$controller['POST']['/statusChange']['auth'] = 'utilisateur';

$controller['GET']['/deleteTache']['controller'] = 'tache';
$controller['GET']['/deleteTache']['action'] = 'delete';
$controller['GET']['/deleteTache']['auth'] = 'chefdeprojet';

$controller['GET']['/userboard']['controller'] = 'Userboard';
$controller['GET']['/userboard']['action'] = 'index';
$controller['GET']['/userboard']['auth'] = 'chefdeprojet';

$controller['GET']['/planning']['controller'] = 'Userboard';
$controller['GET']['/planning']['action'] = 'viewPlanning';
$controller['GET']['/planning']['auth'] = 'utilisateur';

return $controller;