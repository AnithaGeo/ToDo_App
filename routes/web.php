<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.login');
});

Route::get('register', function () {
    return view('pages.register');
})->name('register');

Route::get('addtask', function () {
    return view('pages.addtask');
})->name('addtask');

Route::get('viewtask', function () {
    return view('pages.viewtask');
})->name('viewtask');