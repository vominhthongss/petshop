<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Defining the prefix for the controller and the route for the home page. */

$prefixControllerUser = 'App\Http\Controllers\User';
Route::get('/', 'App\Http\Controllers\User\HomeController@index');

/* Defining the prefix for the controller and the route for the home page. */
$prefix = '/home';
Route::group(['prefix' => $prefix], function () use ($prefixControllerUser) {
    $controller = $prefixControllerUser . '\HomeController';
    $method = '@index';
    /* Defining the route for the home page. */
    Route::get('/', ['as' => 'home', 'uses' => $controller . $method]);
});
