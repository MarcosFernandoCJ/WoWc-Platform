<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TeacherController;

Route::get("/",HomeController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Institutions
Route::view('/board-institutions', 'layouts/board-institutions/board');


//! Student/Player 
Route::view('/main/create-character', 'main/player/create-character')->name('create-character');
Route::view('/main/player', 'layouts/main/player')->name('player'); 

Route::view('/students-mision2', 'layouts/board-estudents/board-mision2');
Route::view('/students-quizzes', 'layouts/board-estudents/board-quizzes');
Route::view('/students-quizzes-exam', 'layouts/board-estudents/board-quizzes-exam');
//Unused
Route::view('/students-perfil', 'layouts/board-estudents/board-perfil');
Route::view('/students-home', 'layouts/board-estudents/board-home');

//! Teacher/Master 
Route::view('/profesor-create-group', 'layouts/board-profesor/board-create-group');


// Profesor pruebas con middleware 
Route::view('/board-profesor', 'layouts/board-profesor/board')->middleware('auth:secondary');

// Register
Route::view('/register-users', 'layouts/register/register-users');
Route::view('/type-users', 'layouts/register/type-users');

// Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Institution register
Route::view('/register-institution', 'layouts.register.register-institutions')->name('register.inst');


// otros
Route::resource('teachers', TeacherController::class)->middleware('auth:secondary');