<?php

use App\Http\Controllers\mainpagecontroller;
use App\Http\Controllers\auth\registercontroller;
use App\Http\Controllers\auth\Logincontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [mainpagecontroller::class, 'getHome'])->name('home');
Route::get('/home', [mainpagecontroller::class, 'getHome'])->name('home');


Route::get('/register', [mainpagecontroller::class, 'getdangky'])->name('register');
Route::get('/admin', [mainpagecontroller::class, 'getHome'])->name('admin');
Route::get('/buildPC', function () {
    return view('pcbuild');
})->name('pcbuild');
Route::get('/login', [mainpagecontroller::class, 'getlogin'])->name('login');
Auth::routes();
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Auth::logout();
