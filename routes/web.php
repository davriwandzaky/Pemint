<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/biodata', function (){
    return 'Nama : Davriwan Dzaky, NIM : 175150707111010';
});

$router->get('hello/{name}', function($name){
    return 'Hello, '.$name;
});
$router->get('/products', 'ProductsController@index');

$router->get('/products/{id}', 'ProductsController@show');

$router->post('/products', 'ProductsController@store');

$router->delete('/products/{id}', 'ProductsController@destroy');

