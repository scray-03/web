<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminIndexController;



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

Route::get('/', [GuestController::Class, 'index'])->name('index');
Route::get('/category', [GuestController::Class, 'category'])->name('category');
Route::get('/post', [GuestController::Class, 'post'])->name('post');


//Auth::routes();
Route::prefix('adminadmin')->name('admin.')->group(function() { 
    Route::get('/',[AdminIndexController::class, 'index'])->name('index');
    Route::resource('/news', AdminNewsController::class);
});