<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GroupController;
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
    return view('welcome');
});
Route::get('posts', [\App\Http\Controllers\PostController::class,'index']);
Route::get('groups',[GroupController::class, 'index']);
Route::post('groups/{id}/notify',[GroupController::class, 'notify'])->name('notify');
Route::get('spy/{id}',[LoginController::class, 'spy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
