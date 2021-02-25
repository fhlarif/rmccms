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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('/dashboard',function(){
            return view('dashboard');
        })->name('dashboard');

        Route::get('/pages',function(){
            return view('admin.pages');
        })->name('pages');
        });

require __DIR__.'/auth.php';