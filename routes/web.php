<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/student/add',[StudentController::class,'index'])->name('student.add');
Route::post('/student/create',[StudentController::class,'create'])->name('student.create');
Route::get('/student/manage',[StudentController::class,'manage'])->name('student.manage');
Route::get('/student/detail/{id}',[StudentController::class,'detail'])->name('student.detail');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
