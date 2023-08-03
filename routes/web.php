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

Route::get('/index', [MemberController::class, 'index'])->name('member.index');

Route::get('/create', [MemberController::class, 'create'])->name('member.create');

Route::post('/store', [MemberController::class, 'store'])->name('member.store');