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

$router->group(['prefix' => 'api', /*'middleware' => 'auth'*/], function () use ($router) {

    // FRAMEWORKS
    $router->get('frameworks',  ['uses' => 'FrameworkController@index']);

    $router->put('frameworks/{id}', ['uses' => 'FrameworkController@update']);


    // TOOLS
    $router->get('tools',  ['uses' => 'ToolController@index']);

    $router->put('tools/{id}', ['uses' => 'ToolController@update']);


    // LANGUAGES
    $router->get('languages',  ['uses' => 'LanguageController@index']);

    $router->put('languages/{id}', ['uses' => 'LanguageController@update']);

});
