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
    return view('index');
});

Route::get('/accueil', function () {
    return view('index');
});

Route::get('/projets', function () {
    return view('projets');
});

Route::get('/profs', function () {
    return view('profs');
});

Route::get('/jeux', function () {
    return view('/projets/jeux');
});

Route::get('/3d', function () {
    return view('/projets/troisd');
});

Route::get('/animations', function () {
    return view('/projets/anim');
});

Route::get('/connexion', function () {
    return view('/compte/connexion');
});

Route::get('/creation', function () {
    return view('/compte/creation');
});