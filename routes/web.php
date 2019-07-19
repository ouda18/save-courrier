<?php

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

//la route principale
Route::view('/', 'welcome');  // 'welcome'

// route d'insertion  remplacement de l'inscription
Route::get('insertion', 'InsertionController@formulaire');
Route::post('insertion', 'InsertionController@traitement');
Route::get('/deconnexion', 'InsertionController@deconnexion');

// afficher les insertion
Route::get('/utilisateurs',  'UtilisateursController@liste');
Route::get('/deconnexion', 'UtilisateursController@deconnexion');

//connection
Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');
Route::get('/acceuil','ConnexionController@acceuil');  // si la connection passe avant la page avant le formulaire
Route::get('/deconnexion', 'ConnexionController@deconnexion');

// Courriers
Route::get('/courriers', 'CourriersController@formulaire');
Route::post('/courriers', 'CourriersController@traitement');
Route::get('/deconnexion', 'CourriersController@deconnexion');
