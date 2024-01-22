<?php
use App\Http\Controllers\StudentManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register-form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::view('/quanlylophoc', 'quanlylophoc');
Route::view('/quanlygiangvien', 'quanlygiangvien');
Route::view('/quanlykhoa', 'quanlykhoa');
Route::view('/quanlysinhvien', 'quanlysinhvien');
Route::view('/quanlydiem', 'quanlydiem');



