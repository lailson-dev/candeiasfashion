<?php 

require "../bootstrap.php";

use app\classes\Routes;
use app\classes\Uri;
use app\classes\Layout;

$routes = [
	'/' => 'controllers/indexController',
	'/cadastro' => 'controllers/create_userController',
	'/user_store' => 'controllers/user_storeController',
];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');