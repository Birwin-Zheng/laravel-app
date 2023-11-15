<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/select_store_list','App\Http\Controllers\select_store_list@index');
Route::get('/data','App\Http\Controllers\select_store_list@function1');
Route::get('/test','App\Http\Controllers\select_store_list@test');
Route::get('/zodemo','App\Http\Controllers\select_store_list@zodemo');
