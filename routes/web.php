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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Character Routes
 */
Route::get('/characters', 'CharacterController@index');
Route::get('/characters/create', 'CharacterController@create');
Route::get('/characters/{id}', 'CharacterController@show');
Route::get('/characters/{id}/edit', 'CharacterController@edit');

/*
 * Character Calculator Routes
 */
Route::get('/characters/calculator', 'CharacterCalculatorController@show');

/*
 * Encounter Type Routes
 */
Route::get('/encounters/types', 'EncounterTypeController@index');
Route::get('/encounters/types/create', 'EncounterTypeController@create');
Route::get('/encounters/types/{id}', 'EncounterTypeController@show');
Route::get('/encounters/types/{id}/edit', 'EncounterTypeController@edit');

/*
 * Encounter Definition CRUD endpoints
 */
Route::get('/encounters/types/{id}/definitions', 'EncounterDefinitionController@create');
Route::get('/encounters/types/definitions/{id}', 'EncounterDefinitionController@edit');

/*
 * Encounter Routes
 */
Route::get('/encounters', 'EncounterController@index');
Route::get('/encounters/create', 'EncounterController@create');
Route::get('/encounters/{id}', 'EncounterController@show');
Route::get('/encounters/{id}/edit', 'EncounterController@edit');

/*
 * Talent Type Routes
 */
Route::get('/talents/types/create', 'TalentTypeController@create');
Route::get('/talents/types/{id}', 'TalentTypeController@show');
Route::get('/talents/types/{id}/edit', 'TalentTypeController@edit');
