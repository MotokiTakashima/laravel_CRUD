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

// 一覧画面
Route::get('/index', [MemberController::class, 'index'])->name('member.index');

// 登録画面
Route::get('/create', [MemberController::class, 'create'])->name('member.create');

// 登録画面
Route::post('/store', [MemberController::class, 'store'])->name('member.store');

// 詳細画面
Route::get('/show/{id}', [MemberController::class, 'show'])->name('member.show');

// 編集画面
Route::get('/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');