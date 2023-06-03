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

//Route::get('/', function () {
//    $contents = file_get_contents('../public/data.js');
//    $response = Response::make($contents, "200");
//    $response->header('Content-Type', 'application/javascript');
//    return $response;
////    return "asuau";
//});

Route::get('/', function () {
    abort(404);
});
