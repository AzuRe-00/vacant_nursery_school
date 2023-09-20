<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AddController;
use App\Http\Controllers\User\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('register', [UserController::class, 'create'])->name('user.register');
Route::post('register', [UserController::class, 'store'])->name('register.store');
Route::get('login', [UserController::class, 'index'])->name('login.index'); 
Route::post('login', [UserController::class, 'login'])->name('login.login');
Route::get('logout', [UserController::class, 'logout'])->name('login.logout');
Route::post('logout', [HomeController::class, 'logout']);
Route::get('/form', [FormController::class, 'form'])->name('form');
Route::post('/form/confirm', [FormController::class, 'confirm']);
Route::post('/form/complete', [FormController::class, 'complete'])->name('form.complete');
Route::get('/posts/{post}', [HomeController::class, 'show']);

Route::prefix('user')->middleware('auth.members:members')->group(function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('user.dashboard');
});

Route::prefix('admin')->group(function(){
   Route::get('register', [AdminController::class, 'create'])->name('admin.register');
   Route::post('register', [AdminController::class, 'store'])->name('admin.register.store');
   Route::get('login', [AdminController::class, 'index'])->name('admin.login.index'); 
   Route::post('login', [AdminController::class, 'login'])->name('admin.login.login');
   Route::get('logout', [AdminController::class, 'logout'])->name('admin.login.logout');
   Route::post('logout', [AdminHomeController::class, 'logout']);
   
   Route::get('add', [AddController::class, 'create']);
   Route::post('posts', [AddController::class, 'store']);
   Route::get('posts/{post}', [AddController::class, 'show']);
});

Route::prefix('admin')->middleware('auth:admins')->group(function(){
    Route::get('/', [AdminHomeController::class, 'dashboard'])->name('admin.dashboard');
});
