<?php

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

$router->get('/key', function () use ($router) {
    return str_random(32);
});

$router->get('/product/{id}', function ($id){
    return $id;
});

/**
 * Routes for resource todo
 */
$router->get('todo', 'TodosController@all');
$router->get('todo/{id}', 'TodosController@get');
$router->post('todo', 'TodosController@add');
$router->put('todo/{id}', 'TodosController@put');
$router->delete('todo/{id}', 'TodosController@remove');
