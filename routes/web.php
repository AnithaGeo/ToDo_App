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

Route::middleware("guest")->group(function(){


    
    Route::get('/', function () {
        return view('pages.login');
    })->name("pages.login");

    Route::get('/pages/register', function () {
        return view('pages.register');
    })->name("pages.register");
    
});
    
// Route::get('/pages/addtask', function () {
    //     return view('pages.addtask');
    // });
    
    Route::middleware(['auth'])->group(function(){
        Route::get('/pages/index', [TodoController::class, 'index'])->name("pages.index");
        Route::get('/pages/edittask/{id}', [TodoController::class, 'editt'])->name("pages.edittask");
        Route::post('/pages/edittask/{id}', [TodoController::class, 'update'])->name("todo.edit");
        Route::get('/pages/addtask', [TodoController::class, 'add'])->name("pages.addtask");
        Route::post('/todo/add',[TodoController::class,'store'])->name("todo.add");
        Route::get('/pages/profile', [TodoController::class, 'profile'])->name("pages.profile");
        Route::get('/pages/changepswd', [TodoController::class, 'cpswd'])->name("pages.changepswd");
        Route::delete('/todo/delete/{id}',[TodoController::class,'destroy'])->name("todo.destroy");
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name("profile.edit");
//     Route::patch('/profile', [ProfileController::class, 'update'])->name("rofile.update");
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name("profile.destroy");
// });

require __DIR__.'/auth.php';
