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

//read
$router->get('/products', 'ProductsController@index');
$router->get('/products/{id}', 'ProductsController@show');

//create
$router->post('/products', 'ProductsController@store');

//delete
$router->delete('/products/{id}', 'ProductsController@destroy');

//update
$router->put('/products/{id}', 'ProductsController@update');



