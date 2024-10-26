<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TeacherAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:teacher'])->group(function () {
    Route::get('subjects', [SubjectController::class, 'index'])->name('subjects.index');
    Route::get('subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::post('subjects', [SubjectController::class, 'store'])->name('subjects.store');
});


Route::get('teacher/register', [TeacherAuthController::class, 'showRegisterForm'])->name('teacher.register');
Route::post('teacher/register', [TeacherAuthController::class, 'register']);
Route::get('teacher/login', [TeacherAuthController::class, 'showLoginForm'])->name('teacher.login');
Route::post('teacher/login', [TeacherAuthController::class, 'login']);
Route::post('teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');
