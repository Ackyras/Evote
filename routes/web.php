<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\votingController;
use App\Http\Controllers\mailController;
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

//home
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');
//Hasil vote
Route::get('/hasil',  [votingController::class, 'index'])->name('hasil');

//Counting and Passing
Route::get('/voting/{id}',  [votingController::class, 'voteShow'])->name('voteShow');
Route::post('/voting/{id}',  [votingController::class, 'vote'])->name('vote');

//Auto Mail
Route::get('/send', [mailController::class, 'Send'])->name('send');

//authentication
Route::get('/login', [authController::class, 'index'])->name('login');
Route::post('/', [authController::class, 'login'])->name('proseslogin');
Route::get('/logout', [authController::class, 'logout'])->name('logout');

//test
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/cari',     [votingController::class, 'cariShow'])->name('cariShow');
Route::post('/cari',     [votingController::class, 'cari'])->name('cari');
