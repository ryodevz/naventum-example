<?php

use App\Http\Controllers\StudentController;
use App\Http\Middleware\isAuth;
use App\Models\Student;
use Naventum\Framework\Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->middleware([isAuth::class])->name('home');
Route::get('/student/create', [StudentController::class, 'create'])->middleware([isAuth::class])->name('student.create');
Route::post('/student/create', [StudentController::class, 'store'])->middleware([isAuth::class])->name('student.store');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->modelBindings(['student' => Student::class])->middleware([isAuth::class])->name('student.edit');
Route::post('/student/{student}/edit', [StudentController::class, 'update'])->modelBindings(['student' => Student::class])->middleware([isAuth::class])->name('student.update');
Route::get('/student/{student}/delete', [StudentController::class, 'destroy'])->modelBindings(['student' => Student::class])->middleware([isAuth::class])->name('student.delete');
