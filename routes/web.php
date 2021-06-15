<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [HomeController::class, 'show'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
Route::get('/dashboard',[DashboardController::class,'show_post'])->name('dashboard');
Route::get('/post', [Postcontroller::class,'index'])->name('post_index');
Route::post('/post', [Postcontroller::class,'create'])->name('post_create');
Route::get('/post/edit/{id}', [Postcontroller::class,'edit'])->name('post_edit');
Route::put('/post/edit/{id}', [Postcontroller::class,'update'])->name('post_update');
Route::get('/post/delete/{id}', [Postcontroller::class,'destroy'])->name('post_destroy');
});
