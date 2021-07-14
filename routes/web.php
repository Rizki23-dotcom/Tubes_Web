<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookProductController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\HomeController;
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
// Route::resource('book', bookProductController::class);
Route::group(['middleware'], function (){
    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('book', BookProductController::class);
    Route::resource('jenis', JenisController::class);
    Route::resource('identity', IdentityController::class);

});

