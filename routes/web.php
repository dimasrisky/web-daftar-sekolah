<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SekolahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Pendaftaran dan Login
Route::group(['middleware' => 'guest'], function(){
    Route::get('/', [LoginController::class, 'index'])->name('login.form');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.form');
    Route::post('/login', [ LoginController::class, 'handle'])->name('login.handle');
    Route::post('/register', [ RegisterController::class, 'handle'])->name('register.handle');
});
Route::get('/logout', [ LoginController::class, 'logout' ])->name('logout')->middleware('isAuth');

// Bagian User
Route::get('/home', [ HomeController::class, 'index'])->name('home.index')->middleware('isAuth');

// Bagian admin
Route::group(['prefix' => 'dashboard', 'middleware' => ['isAuth', 'isAdmin']], function(){
    Route::resource('/sekolah', SekolahController::class)->parameter('sekolah', 'id');
});