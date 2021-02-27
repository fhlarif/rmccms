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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->get('/guest', function () {
    return view('guest');
})->name('guest');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('admin')->middleware(['auth:sanctum','verified'])->group(function(){

    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('admin.dashboard');

    Route::get('/pages',function(){
        return view('admin.pages');
    })->name('admin.pages');
});

