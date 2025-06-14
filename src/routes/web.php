<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

//フォーム画面
Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/thanks', [ContactController::class, 'store'])->name('contact.store');

// ユーザー登録画面
Route::get('/register', [UserController::class, 'index'])->name('auth.register');
Route::post('/register', [UserController::class, 'store'])->name('auth.register.store');

// ログイン画面
Route::get('/login', [AuthController::class, 'index'])->name('auth.showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// ログアウト
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//管理画面
Route::get('/admin', [AdminContactController::class, 'index'])->name('auth.admin')->middleware('auth');
