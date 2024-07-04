<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get("/", HomeController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::middleware('role:user')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    });
});

//Institutions
Route::view('/board-institutions', 'layouts/board-institutions/board');

Route::middleware('role:user')->group(function () {
    
    Route::prefix('main')->group(function () {

        Route::middleware('role:master')->group(function () {

            Route::get('/create-courses/{id}', [MasterController::class, 'createCourse'])->name('master.create-courses');
            Route::prefix('master')->controller(MasterController::class)->group(function () {
                Route::get('/', function () {
                    return redirect('/main/master/groups');
                })->name('master');
                Route::get('/create-group', 'createGroup')->name('player.create-group');
                Route::get('/groups', 'groups')->name('master.groups');
                Route::get('/members', 'members')->name('master.members');
                Route::get('/tasks', 'tasks')->name('master.tasks');
                Route::get('/quizzes', 'quizzes')->name('master.quizzes');

            });
        });

        Route::middleware('role:player')->group(function () {

            Route::prefix('player')->controller(PlayerController::class)->group(function () {

                Route::get('/', function () {
                    return redirect('/main/player/character');
                })->name('player');

                Route::get('/create-character', 'createCharacter')->name('player.create-character');
                Route::get('/character', 'character')->name('player.character');
                Route::get('/groups', 'groups')->name('player.groups');
                Route::get('/members', 'members')->name('player.members');
                Route::get('/tasks', 'tasks')->name('player.tasks');
                Route::get('/quizzes', 'quizzes')->name('player.quizzes');
            });
        });
    });

});

Route::view('/students-mision2', 'layouts/board-estudents/board-mision2');
Route::view('/students-quizzes', 'layouts/board-estudents/board-quizzes');
Route::view('/students-quizzes-exam', 'layouts/board-estudents/board-quizzes-exam');
//Unused
Route::view('/students-perfil', 'layouts/board-estudents/board-perfil');
Route::view('/students-home', 'layouts/board-estudents/board-home');

//! Teacher/Master
Route::view('/profesor-create-clase', 'layouts/board-profesor/board-create-clase');

// Profesor pruebas con middleware
Route::post('/logouts', [LoginController::class, 'logout'])->name('logoutall');

// Register
Route::view('/register-users', 'layouts/register/register-users');
Route::view('/type-users', 'layouts/register/type-users');

// Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Institution register
Route::view('/register-institution', 'layouts.register.register-institutions')->name('register.inst');

// otros

//test-quizzes
Route::get('/quizzes', [QuizController::class, 'index'])->name('indexquiz');
Route::get('/quizzes/result', [QuizController::class, 'result'])->name('quizzes.score');
Route::post('/quizzes/check', [QuizController::class, 'check'])->name('quizzes.check');

//test json
Route::get('/character/appearance/{id}', [PlayerController::class, 'get_character_sheet']);
Route::get('/character/ambience/{id}', [PlayerController::class, 'get_ambience']);

//! Institutions
Route::middleware('role:institution')->group(function () {
    Route::get('/institution', [TeacherController::class, 'index'])->name('teachers.index');
    Route::post('/teachers-store', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/delete/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

});

Route::post('/courses-store', [CourseController::class, 'store'])->name('course.store');
