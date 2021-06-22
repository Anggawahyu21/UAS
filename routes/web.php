<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Verified;
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
    return view('user.home'); 
    // auth.login
});
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
Route::Resource('dataguru',GuruController::class);
Route::Resource('datasiswa',SiswaController::class);