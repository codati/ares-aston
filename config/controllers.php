<?php

// Login
$controller['GET']['/']['controller'] = 'Login';
$controller['GET']['/']['action'] = 'getView';

$controller['POST']['/login']['controller'] = 'Login';
$controller['POST']['/login']['action'] = 'connect';


// dashbord
$controller['GET']['/dashboard']['controller'] = 'Dashboard';
$controller['GET']['/dashboard']['action'] = 'index';

// details
$controller['GET']['/details']['controller'] = 'Details';
$controller['GET']['/details']['action'] = 'index';

// addTache
$controller['GET']['/addTache']['controller'] = 'tache';
$controller['GET']['/addTache']['action'] = 'getViewAdd';

$controller['POST']['/addTache']['controller'] = 'tache';
$controller['POST']['/addTache']['action'] = 'add';

// editTache
$controller['GET']['/editTache']['controller'] = 'tache';
$controller['GET']['/editTache']['action'] = 'getViewEdit';

$controller['POST']['/editTache']['controller'] = 'tache';
$controller['POST']['/editTache']['action'] = 'edit';

$controller['POST']['/statusChange']['controller'] = 'tache';
$controller['POST']['/statusChange']['action'] = 'statusChange';

$controller['POST']['/deleteTache']['controller'] = 'tache';
$controller['POST']['/deleteTache']['action'] = 'delete';

return $controller;