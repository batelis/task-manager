<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$api = app('Dingo\Api\Routing\Router');
$api->version('v1',function($api){
    header('Access-Control-Allow-Origin: http://localhost:4200');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');

    // API
    $api->group(['namespace'=>'App\Http\Controllers\Api'],function($api){

          // Public methods
        $api->resource('task','TaskController');

    });
});

// Catchall - Displays Ember app
Route::any('{catchall}',function(){
    return view('welcome');
})->where('catchall', '(.*)');
