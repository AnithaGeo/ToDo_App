<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/pages/register', function () {
    return view('pages.register');
});

Route::post('/pages',[TodoController::class,'store']);

// Route::get('/pages/addtask', function () {
//     return view('pages.addtask');
// });

Route::get('/pages/index', [TodoController::class, 'index'])->name('pages.index');
Route::get('/pages/edittask', [TodoController::class, 'editt'])->name('pages.edittask');
Route::get('/pages/addtask', [TodoController::class, 'add'])->name('pages.addtask');
Route::get('/pages/profile', [TodoController::class, 'profile'])->name('pages.profile');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
