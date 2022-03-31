<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

//会員登録ページ
Route::get('/register', [AuthController::class, 'getRegister']);
//会員登録処理
Route::post('/register', [AuthController::class, 'postRegister']);
//ログインページ
Route::get('/login', [AuthController::class, 'getLogin']);
//ログイン処理
Route::post('/login', [AuthController::class, 'postLogin']);
//打刻ページ
Route::get('/', [AttendanceController::class, 'getIndex']);
// Route::get('/', function () {
//   return view('index');
// });


//日付一覧ページ
Route::get('/attendance', [AttendanceController::class, 'getAttendance']);


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