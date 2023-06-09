<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengalamanKuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MatkulController;
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
Auth::routes();
Route::get('/', [HomeController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'dashboard']);
Route::get('/profile', [ProfileController::class,'profile']);
Route::get('/profile/{$name}', [ProfileController::class,'profile']);
Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class,'pengalaman']);
Route::get('/matkul', [MatkulController::class,'index']);
Route::get('/matkul/{semester}', [PostController::class, 'show']);

Route::controller(LayoutController::class)->group(function (){
    Route::get('home', 'index');
    Route::get('/layout/index', 'index');
});