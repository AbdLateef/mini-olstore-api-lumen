<?php

use App\Http\Controllers\ProductController;
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

$router->get('/', 'ProductController@index');

$router->get('/products', 'ProductController@index');

$router->get('/products/{id}', 'ProductController@detail');

$router->post('/products', 'ProductController@create');

$router->put('/products/{id}', 'ProductController@update');

$router->put('/products/{id}/order', 'ProductController@order');

$router->delete('/products/{id}', 'ProductController@destroy');
