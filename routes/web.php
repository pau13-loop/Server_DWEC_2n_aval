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

Route::get('/', function () {
    return view('welcome');
});

# Devuelvo texto de aquí sin acceder al MIDDLEWARE
Route::get('/helloWorldRoute', function () {
    return ('Hello world from Route !');
});

# Devuelve contenido MIDDLEWARE creado y después contenido Route
Route::get('/helloWorld', function () {
    return ('HelloWorld');
}) -> middleware('helloWorld');