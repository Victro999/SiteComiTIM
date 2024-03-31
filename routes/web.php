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

//---------- Accueil ----------//
Route::get('/', function () {
    return view('index');
});

Route::get('/accueil', function () {
    return view('index');
});

//---------- Projets ----------//
Route::get('/projets', function () {
    return view('projets');
});

Route::get('/jeux', function () {
    return view('/projets/jeux');
});

Route::get('/3d', function () {
    return view('/projets/troisd');
});

Route::get('/infographies', function () {
    return view('/projets/info');
});

Route::get('/animations', function () {
    return view('/projets/anim');
});

//---------- Nouvelles ----------//
Route::get('/nouvelles', function () {
    return view('/nouvelles');
});

//---------- Profs ----------//
Route::get('/profs', function () {
    return view('profs');
});

//---------- Compte ----------//
Route::get('/connexion', function () {
    return view('/compte/connexion');
});

Route::get('/creation', function () {
    return view('/compte/creation');
});