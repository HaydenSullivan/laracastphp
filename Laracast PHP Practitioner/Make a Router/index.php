<?php


$database = require 'core/bootstrap.php';



$router = new Router;


require 'routes.php';


$uri = trim($_SERVER['REQUEST_URI'], '/');


$router =  Router::load('routes.php');


$router->direct($uri);


require 'views/index.view.php';
