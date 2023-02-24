<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PendaftaranController;
// use App\Http\Controllers\SeleksiController;
// use App\Http\Controllers\UniversitasController;
use App\Http\Controllers\Admin\DevAdmin;
use App\Http\Controllers\Admin\DevHome;
use App\Http\Controllers\Auth\AdminAuthController;

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

// ADMIN AUTH
Route::get('/dev/login', [AdminAuthController::class, 'index'])->name('login');
Route::post('/dev/login', [AdminAuthController::class, 'login']);
Route::get('/dev/logout', [AdminAuthController::class, 'logout']);

// ADMIN PAGE
Route::group(['prefix'=> 'dev','middleware'=>['auth:admin']], function(){
    Route::get('/admin', [DevAdmin::class, 'index']);
    Route::get('/home', [DevHome::class, 'index']);
    Route::get('/', [DevHome::class, 'index']);
    
    Route::post('/admin', [DevAdmin::class, 'postHandler']);
});

// API
Route::group(['prefix'=> 'api'], function(){
    Route::get('admin/{admin:id}', [APIController::class, 'Admin']);
});