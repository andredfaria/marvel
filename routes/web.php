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
    return view('index');
});
    
Route::get('/v1/public/characters/{id?}', 
          ['as' => 'characters.listar', 'uses' => 'App\Http\Controllers\charactersController@listar']);  

Route::get('/v1/public/comics/{id?}', 
              ['as' => 'comics.listar', 'uses' => 'App\Http\Controllers\charactersController@comics']); 


Route::get('/v1/public/series/{id?}', 'App\Http\Controllers\charactersController@tela');
Route::get('GET /v1/public/stories/{id?}', 'App\Http\Controllers\charactersController@index');
Route::get('GET /v1/public/creators{id?}', 'App\Http\Controllers\charactersController@tela');
