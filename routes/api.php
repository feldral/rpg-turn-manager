<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * Character CRUD endpoints
 */
Route::put('/characters', 'CharacterController@store');
Route::get('/characters', 'CharacterController@list');
Route::get('/characters/{id}', 'CharacterController@get');
Route::post('/characters/{id}', 'CharacterController@update');
Route::delete('/characters/{id}', 'CharacterController@destroy');

/*
 * Encounter Type Crud endpoints
 */
Route::put('/encounters/types', 'EncounterTypeController@store');
Route::get('/encounters/types', 'EncounterTypeController@list');
Route::get('/encounters/types/{id}', 'EncounterTypeController@get');
Route::post('/encounters/types/{id}', 'EncounterTypeController@update');
Route::delete('/encounters/types/{id}', 'EncounterTypeController@destroy');

/*
 * Encounter CRUD endpoints
 */
Route::put('/encounters', 'EncounterController@store');
Route::get('/encounters', 'EncounterController@list');
Route::get('/encounters/{id}', 'EncounterController@get');
Route::post('/encounters/{id}', 'EncounterController@update');
Route::delete('/encounters/{id}', 'EncounterController@destroy');
/*
 * Encounter interaction endpoints
 */
Route::get('/characters/{id}/encounters');

/*
 * Character Instance CRUD endpoints
 */
Route::put('/characters/{characterId}/encounters/{encounterId}', 'CharacterInstanceController@create');
Route::get('/characters/instances/{id}', 'CharacterInstanceController@get');
Route::delete('/characters/instance/{id}', 'CharacterInstanceController@destroy');
/*
 * Character Instance interaction endpoints
 */
Route::get('/characters/{id}/instances', 'CharacterInstanceController@list');

/*
 * todo Turn endpoints
 */
