<?php

use App\Http\Controllers\StudentManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\GiaoVienController;
use App\Http\Controllers\LopController;

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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/student-management', [StudentManagementController::class, 'index'])->name('student-management');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Routes for account management

Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('/accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');
Route::delete('/accounts/{id}', [AccountController::class, 'destroy'])->name('accounts.destroy');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register-form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::view('/quanlylophoc', 'quanlylophoc');
Route::view('/quanlygiangvien', 'quanlygiangvien');
Route::view('/quanlykhoa', 'quanlykhoa');
Route::view('/quanlysinhvien', 'quanlysinhvien');
Route::view('/quanlydiem', 'quanlydiem');

//giaovien
Route::get('/giaovien', [GiaoVienController::class, 'index'])->name('giaovien.index');
Route::get('/giaovien/create', [GiaoVienController::class, 'create'])->name('giaovien.create');
Route::post('/giaovien', [GiaoVienController::class, 'store'])->name('giaovien.store');
Route::delete('/giaovien/{id}', [GiaoVienController::class, 'destroy'])->name('giaovien.destroy');


//lop

Route::get('/lops', [LopController::class, 'index']);
Route::get('/lops/{MaLop}/edit', [LopController::class, 'edit']);
Route::put('/lops/{MaLop}', [LopController::class, 'update']);
Route::get('/lops/filter', [LopController::class, 'filter']);
Route::delete('/lops/{MaLop}', [LopController::class, 'destroy']);
Route::get('/lops/create', [LopController::class, 'create']);
Route::post('/lops', [LopController::class, 'store'])->name('lops.store');