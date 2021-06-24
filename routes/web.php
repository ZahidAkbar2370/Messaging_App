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

// Route::get('/messages', function () {
//     return view('Student\message');
// });
Route::get("dashboard","MessageController@dashboard");
Route::get("messages/{id}","MessageController@get_messages");
Route::post("save-messages/{id}","MessageController@save_messages");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
