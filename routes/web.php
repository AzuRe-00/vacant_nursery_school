<?php

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
    return view('welcome');
});

Route::get('register', [UserController::class, 'create'])->name('user.register');
Route::post('register', [UserController::class, 'store'])->name('register.store');
Route::get('login', [UserController::class, 'index'])->name('login.index'); 
Route::post('login', [UserController::class, 'login'])->name('login.login');
Route::get('logout', [UserController::class, 'logout'])->name('login.logout');
   
Route::prefix('user')->group(function(){
    Route::get('/',[HomeController::class, 'dashboard'])->name('user.dashboard');
});

Route::prefix('user')->middleware('auth.members:members')->group(function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('user.dashboard');
});

Route::prefix('admin')->group(function(){
   Route::get('register', [AdminController::class, 'create'])->name('admin.register');
   Route::post('register', [AdminController::class, 'store'])->name('admin.register.store');
   Route::get('login', [AdminController::class, 'index'])->name('admin.login.index'); 
   Route::post('login', [AdminController::class, 'login'])->name('admin.login.login');
   Route::get('logout', [AdminController::class, 'logout'])->name('admin.login.logout');
   
   Route::get('/',[AdminHomeController::class, 'dashboard'])->name('admin.dashboard');
});

Route::prefix('adimin')->middleware('auth:admins')->group(function(){
    Route::get('/', [AdminHomeController::class, 'dashboard'])->name('admin.dashboard');
});