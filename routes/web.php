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
//kategori
$router->get('/categories', 'CategoriesController@index');
$router->post('/categories', 'CategoriesController@store');
$router->get('/categories/{id}', 'categoriesController@show');
$router->put('/categories/{id}', 'categoriesController@update');
$router->delete('/categories/{id}', 'categoriesController@destroy');

//detail
$router->get('/detail', 'DetailController@index');
$router->post('/detail', 'DetailController@store');
$router->get('/detail/{id}', 'DetailController@show');
$router->put('/detail/{id}', 'DetailController@update');
$router->delete('/detail/{id}', 'DetailController@destroy');

//goods
$router->get('/Good', 'GoodController@index');
$router->post('/Good', 'GoodController@store');
$router->get('/Good/{id}', 'GoodController@show');
$router->put('/Good/{id}', 'GoodController@update');
$router->delete('/Good/{id}', 'GoodController@destroy');

//user
$router->get('/User', 'UserController@index');
$router->post('/User', 'UserController@store');
$router->put('/User/{id}', 'UserController@update');
$router->delete('/User/{id}', 'UserController@destroy');


//works
$router->get('/work', 'WorkController@index');
$router->post('/work', 'WorkController@store');
$router->get('/work/{id}', 'WorkController@show');
$router->put('/work/{id}', 'WorkController@update');
$router->delete('/work/{id}', 'WorkController@destroy');
