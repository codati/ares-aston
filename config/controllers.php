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
$controller['GET']['/addTache']['action'] = 'view';

$controller['POST']['/addTache']['controller'] = 'tache';
$controller['POST']['/addTache']['action'] = 'add';

return $controller;