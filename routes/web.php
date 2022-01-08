<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', [CustomAuthController::class, 'index']);
Route::post('checklogin', [CustomAuthController::class, 'login'])->name('checklogin'); 
Route::group(['middleware' => ['auth']], function() {
    Route::get('presentation', [CustomAuthController::class, 'presentation'])->name('presentation'); 
    Route::get('breakouts', [CustomAuthController::class, 'breakouts'])->name('breakouts'); 
    Route::get('home', [CustomAuthController::class, 'home'])->name('home'); 
    Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');
});
