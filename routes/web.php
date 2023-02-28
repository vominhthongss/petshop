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
/* Defining the prefix for the controller and the route for the colection page. */
$prefix = '/collection';
Route::group(['prefix' => $prefix], function () use ($prefixControllerUser) {
    $controller = $prefixControllerUser . '\CollectionController';
    $method = '@index';
    /* Defining the route for the collection page. */
    Route::get('/{type}', ['as' => 'collection', 'uses' => $controller . $method]);
});
/* Defining the prefix for the controller and the route for the detailproduct page. */
$prefix = '/detailproduct';
Route::group(['prefix' => $prefix], function () use ($prefixControllerUser) {
    $controller = $prefixControllerUser . '\DetailProductController';
    $method = '@index';
    /* Defining the route for the collection page. */
    Route::get('/{id}', ['as' => 'detailproduct', 'uses' => $controller . $method]);
});
/* Defining the prefix for the controller and the route for the cart page. */
$prefix = '/cart';
Route::group(['prefix' => $prefix], function () use ($prefixControllerUser) {
    $controller = $prefixControllerUser . '\CartController';
    $method = '@index';
    /* Defining the route for the collection page. */
    Route::get('/{username}', ['as' => 'cart', 'uses' => $controller . $method]);
});
/* Defining the prefix for the controller and the route for the login page. */
$prefix = '/login';
Route::group(['prefix' => $prefix], function () use ($prefixControllerUser) {
    $controller = $prefixControllerUser . '\LoginController';
    $method = '@index';
    /* Defining the route for the login page. */
    Route::get('/', ['as' => 'login', 'uses' => $controller . $method]);
});
$prefix = '/bill';
Route::group(['prefix' => $prefix], function () use ($prefixControllerUser) {
    $controller = $prefixControllerUser . '\BillController';
    $method = '@index';
    /* Defining the route for the bill page. */
    Route::get('/', ['as' => 'bill', 'uses' => $controller . $method]);
});
