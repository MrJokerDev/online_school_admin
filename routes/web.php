<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/guest', function () {
    return view('layouts.guest');
})->name('guest');

Route::group(['middleware' => 'auth', 'middleware' => 'admin'],function () {
    Route::resource('/dashboard', IndexController::class);
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::resource('/courses', CourseController::class);
    Route::resource('/questions', QuestionController::class);
    Route::resource('/lessons', LessonsController::class);

    Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';