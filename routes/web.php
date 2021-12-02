<?php

use App\Http\Controllers\MediasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TalesController;


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

Route::group(['prefix' => '/tales'], function(){
	Route::get('/', [TalesController::class, 'index']);
	Route::post('/create', [TalesController::class, 'store']);
	Route::get('/getTale/{id}',  [TalesController::class, 'show']);
	Route::get('/download',  [TalesController::class, 'show']);
	Route::post('/update',  [TalesController::class, 'update']);
	Route::get('/delete/{id}',  [TalesController::class, 'destroy']);
});

Route::group(['prefix' => '/medias'], function(){
	Route::post('/create', [MediasController::class, 'store']);
	Route::get('/urls/{id}',  [MediasController::class, 'getUrls']);
	Route::get('/download/{file}',  [MediasController::class, 'downloadFile']);
	Route::get('/delete/{file}',  [MediasController::class, 'destroy']);
});