<?php

use Naventum\Framework\Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\StudentController::class, 'index'])->middleware([App\Http\Middleware\IsAuth::class])->name('home');
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->middleware([App\Http\Middleware\IsAuth::class])->name('student.create');
Route::post('/student/create', [App\Http\Controllers\StudentController::class, 'store'])->middleware([App\Http\Middleware\IsAuth::class])->name('student.store');
Route::get('/student/{student}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->modelBindings(['student' => App\Models\Student::class])->middleware([App\Http\Middleware\IsAuth::class])->name('student.edit');
Route::post('/student/{student}/edit', [App\Http\Controllers\StudentController::class, 'update'])->modelBindings(['student' => App\Models\Student::class])->middleware([App\Http\Middleware\IsAuth::class])->name('student.update');
Route::get('/student/{student}/delete', [App\Http\Controllers\StudentController::class, 'destroy'])->modelBindings(['student' => App\Models\Student::class])->middleware([App\Http\Middleware\IsAuth::class])->name('student.delete');

Route::get('/export/student/pdf/download', [App\Http\Controllers\Api\Export\StudentController::class, 'pdf'])->prefix('/api')->middleware([App\Http\Middleware\IsAuth::class])->name('api.export.students.pdf');
Route::get('/export/student/pdf/preview', [App\Http\Controllers\Api\Export\StudentController::class, 'pdf_preview'])->prefix('/api')->middleware([App\Http\Middleware\IsAuth::class])->name('api.export.students.pdf.preview');
Route::get('/export/student/excel/download', [App\Http\Controllers\Api\Export\StudentController::class, 'excel'])->prefix('/api')->middleware([App\Http\Middleware\IsAuth::class])->name('api.export.students.excel');
Route::get('/export/student/word/download', [App\Http\Controllers\Api\Export\StudentController::class, 'word'])->prefix('/api')->middleware([App\Http\Middleware\IsAuth::class])->name('api.export.students.word');
