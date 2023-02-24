<?php

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

Route::get('/', [App\Http\Controllers\WebController::class, 'welcome']);
Route::get('/list', [App\Http\Controllers\WebController::class, 'list_student']);
Route::get('/create', [App\Http\Controllers\WebController::class, 'create']);
Route::post('/create', [App\Http\Controllers\WebController::class, 'store'])->name("create_student");
