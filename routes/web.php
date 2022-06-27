<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get('/', function() {
    return redirect('/messages');
});

Route::post('messages/deletecontent/{id}', [MessageController::class, 'deletecontent']);

Route::resources([
    'messages' => MessageController::class
]);

// Route::post('/create', [MessageController::class, 'create']);
// Route::delete('/message/{id}', [MessageController::class, 'delete']);
// Route::get('/test', function () {return view('test');});
