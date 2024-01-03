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

$router->get('foo', function () {
    return [
        'id' => 111,
        'name' => 'foo111',
    ];
});

$router->get('example/{number}', [
    'as' => 'example/{number}',
    'uses' => 'ExampleController@handle',
]);

$router->get('init', [
    'as' => 'init',
    'uses' => 'InitController@handle',
]);
