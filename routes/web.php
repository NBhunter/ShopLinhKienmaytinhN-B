<?php

use App\Http\Controllers\mainpagecontroller;
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

Route::get('/', [mainpagecontroller::class, 'getHome'])->name('home');
Route::get('/home', [mainpagecontroller::class, 'getHome'])->name('home');

Route::get('/buildPC', function () {
    return view('pcbuild');
})->name('pcbuild');