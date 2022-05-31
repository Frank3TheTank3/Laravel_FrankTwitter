<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\StudentController;

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

/* 
Route::get('/messages', function () {
    return view('messages'); 
});
*/
Route::get('', [StudentController::class, 'showAll']);
//Route::delete('{id}', [StudentController::class, 'delete']);

Route::get('/messages', [MessageController::class, 'showAll']);
Route::get('/message/{id}', [MessageController::class, 'details']);
Route::post('/create', [MessageController::class, 'create']);
Route::delete('/message/{id}', [MessageController::class, 'delete']);

Route::get('/test', function () {
    return view('test'); 
});