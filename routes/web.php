<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/hasil',  [hasilController::class, 'index']);

Route::get('/voting/{id}',  [hasilController::class, 'voteShow'])->name('voteShow');
Route::post('/voting/{id}',  [hasilController::class, 'vote'])->name('vote');

Route::get('/send', [mailController::class, 'Send']);

