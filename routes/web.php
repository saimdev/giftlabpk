<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBase;

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

Route::view('/user', 'welcome');
Route::view('/about', 'about');
Route::view('/custom', 'customgifts');
Route::view('/custom/cup', 'customcup');
Route::view('/custom/diary', 'customdiary');
Route::view('/', 'login');
Route::view('/shop','shop');
Route::view('signup', 'signup');
Route::post('register', [DataBase::class, 'registration']);
Route::get('signin', [DataBase::class, 'login']);
Route::view('/product','product');
Route::view('/cart', 'cart');
Route::view('/admin', 'admin');
Route::view('/logout', 'login');
Route::view('/list', 'adminlist');
Route::view('/update', 'updateproduct');
Route::view('/customcupview', 'customcupview');
Route::view('/customizediary', 'customdiaryview');
