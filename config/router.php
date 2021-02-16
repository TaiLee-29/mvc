<?php

use Illuminate\Events\Dispatcher;


$request = \Illuminate\Http\Request::createFromGlobals();

function request(){
      global $request;

      return $request;
}
$dispatcher = new Dispatcher();
$container = new \Illuminate\Container\Container();
$router = new \Illuminate\Routing\Router($dispatcher, $container);

function router(){
      global $router;

      return  $router;

}

$router->get('/',App\Controller\IndexController::class);
