<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\hasilController;
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
    return view('Panduan');
})->name('home');

//Hasil vote
Route::get('/hasil',  [votingController::class, 'index'])->name('hasil');

//Counting and Passing
Route::get('/voting/{id}',  [votingController::class, 'voteShow'])->name('voteShow');
Route::post('/voting/{id}',  [votingController::class, 'vote'])->name('vote');

//Auto Mail
Route::get('/send', [mailController::class, 'Send'])->name('send');

//login
Route::get('/login', [authController::class, 'index'])->name('login');
Route::post('/login', [authController::class, 'login'])->name('proseslogin');

//test
Route::get('/test', function () {
    return view('welcome');    
});