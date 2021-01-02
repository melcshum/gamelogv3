<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\GamesController;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/games.index', [App\Http\Controllers\GamesController::class, 'index'])->name('games.index');
Route::get('/games/{gameslug}', ['as' => 'games.show', 'uses' => 'App\Http\Controllers\GamesController@show']);
Route::get('/games/{gameslug}/gamesessions/', ['as' => 'games.gamesessions', 'uses' => 'App\Http\Controllers\GamesController@showGameSessions']);
Route::get('/games/{gameslug}/gamesessions/{sessionid}', ['as' => 'games.gamesessions.playersession', 'uses' => 'App\Http\Controllers\GamesController@showPlayerSessions']);


// scenarios and prefabs
//Route::get('/scenarios', [App\Http\Controllers\ScenariosController::class, 'index'] );
Route::get('/scenarios/name/{name}', 'App\Http\Controllers\ScenariosController@showByName')->name('scenarios.showbyname');
Route::resource('/scenarios', 'App\Http\Controllers\ScenariosController');
Route::get('/prefab', 'App\Http\Controllers\PrefabsController@index');
Route::resource('prefabs', 'App\Http\Controllers\PrefabsController');

Route::get('/xapiprofiles.index', [App\Http\Controllers\XapiProfilesController::class, 'index'])->name('xapiprofiles.index');
Route::get('/xapiprofiles/{id}', ['as' => 'xapiprofiles.show', 'uses' =>'App\Http\Controllers\XapiProfilesController@show']) ;


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

//Route::group(['middleware' => 'auth'], function () {
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
//});
