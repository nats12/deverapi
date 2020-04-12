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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('frameworks',  ['uses' => 'FrameworkController@index']);

    $router->group(['middleware' => 'auth'], function () use ($router) {

        $router->put('frameworks/{id}', ['uses' => 'FrameworkController@update']);
    });

    $router->get('tools',  ['uses' => 'ToolController@index']);

    $router->group(['middleware' => 'auth'], function () use ($router) {

        $router->put('tools/{id}', ['uses' => 'ToolController@update']);
    });

    $router->get('languages',  ['uses' => 'LanguageController@index']);

    $router->group(['middleware' => 'auth'], function () use ($router) {

        $router->put('languages/{id}', ['uses' => 'LanguageController@update']);
    });
});
