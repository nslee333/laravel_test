<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
});

// & Stopped here at trying to get `View testcontroller@show` to work.

Route::group([
    // "middleware" => ["auth"],
], function() {
    Route::get('/test', "TestController@show");
});

Route::get('/test', function() {
    return view('TestController@show');
});
