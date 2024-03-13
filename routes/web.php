<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


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

// Cette façon d'écrire ne marche pas -> Route::get('/','homeController@index');
// Tu vas devoir écrire sous le format suivant 
Route::get('/',[homeController::class, 'index']);
//Route::get('/clinique', [cliniqueController::class, 'index']);
Route::get('/clinique', 'App\Http\Controllers\cliniqueController@index');
Route::get('/medecin', 'App\Http\Controllers\medecinController@index');
Route::get('/diabetique','App\Http\controllers\diabetiqueController@index');
route::get('/carnet','App\Http\controllers\carnetController@index');


//route::get('/ressource','App\Http\controllers\ressourceController@index');
//route::get('/consultation','App\Http\controllers\consultationController@index');

Route::get('/clinique/create','App\Http\Controllers\cliniqueController@create')->name('create');
Route::post('/clinique/store','App\Http\Controllers\cliniqueController@store')->name('store');