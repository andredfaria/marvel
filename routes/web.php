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

Route::get('/', function () {return view('welcome');});
Route::get('/V1/buscar', function () {return view('welcome');});
Route::get('/V1/adicionar', function () {return view('welcome');});
Route::get('/v1/public/characters', function () {return view('welcome');});

