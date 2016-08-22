<?php

// Login
$controller['GET']['/']['controller'] = 'Login';
$controller['GET']['/']['action'] = 'getView';

$controller['POST']['/login']['controller'] = 'Login';
$controller['POST']['/login']['action'] = 'connect';


// dashbord
$controller['GET']['/dashboard']['controller'] = 'Dashboard';
$controller['GET']['/dashboard']['action'] = 'index';


return $controller;