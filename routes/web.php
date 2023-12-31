<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
// ログイン画面
Route::get('/login',[MemberController::class,'showLogin'])->name('login');

Route::post('/login',[MemberController::class,'login']);

// ユーザー登録画面
Route::get('/register',[MemberController::class,'showRegister']);

// 一覧画面
Route::middleware('auth')->group(function (){
  Route::get('/index', [MemberController::class, 'index'])->name('member.index');
});

// 登録画面
Route::get('/create', [MemberController::class, 'create'])->name('member.create');

// 登録処理
Route::post('/store', [MemberController::class, 'store'])->name('member.store');

// 詳細画面
Route::get('/show/{id}', [MemberController::class, 'show'])->name('member.show');

// 編集画面
Route::get('/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');

// 更新処理
Route::post('/update/{id}', [MemberController::class, 'update'])->name('member.update');

// 削除処理
Route::post('/destroy/{id}', [MemberController::class, 'destroy'])->name('member.destroy');