<?php 

require "../bootstrap.php";

use app\classes\Routes;
use app\classes\Uri;
use app\classes\Layout;

$routes = [
	'/' => 'controllers/indexController',
	'/moda-intima' => 'controllers/intimateController',
	'/moda-fitness' => 'controllers/fitnessController',
	'/cadastro' => 'controllers/create_userController',	
	'/login' => 'controllers/user_loginController',
	'/perfil' => 'controllers/user_editController',
	'/user_store' => 'controllers/user_storeController',	
	'/user_update' => 'controllers/user_updateController',
];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');