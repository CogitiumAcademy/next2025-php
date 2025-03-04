<?php

use Symfony\Component\HttpFoundation\Request;

//var_dump($_SERVER);
//var_dump($_GET['controller'], $_GET['action']);

require_once './vendor/autoload.php';

$request = Request::createFromGlobals();
//var_dump($request);

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$controller = !empty($request->get('controller')) ? ucfirst($request->get('controller')) . 'Controller' : 'DefaultController';

$action = $request->get('action') ?? 'home';

//echo 'Controller = ' . $controller . '<br>';
//echo 'Action = ' . $action . '<br>';

/*
$controllerFile =  '.' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . $controller . '.php';
var_dump($controllerFile);
require_once $controllerFile;
$ctrl = new $controller;
var_dump($ctrl);
$ctrl->$action();
*/

spl_autoload_register(function($className) {
    //echo "Chargement de la classe : $className <br>";
    require_once '.' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . $className . '.php';
});
$response = call_user_func_array([new $controller(), $action], []);
$response->send();