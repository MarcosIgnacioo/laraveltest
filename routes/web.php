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

Route::get('/home', function () {
     // return view('welcome'); con la funcion view y dentro de ella el nombre de la vista podemos retornarla al endpoint
    return view('home');
});
Route::get('/favorites', function () {
     // return view('welcome'); con la funcion view y dentro de ella el nombre de la vista podemos retornarla al endpoint
    return view('favorites');
});
Route::get('/profile', function () {
     // return view('welcome'); con la funcion view y dentro de ella el nombre de la vista podemos retornarla al endpoint
    return view('users.profile');
});
