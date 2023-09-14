<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\GaleriaController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\ContactoController;
use App\Http\Controllers\Admin\AsignarCursosController;

Route::get('',[HomeController::class,'index'])->middleware('can:Ver dashboard')->name('home');
Route::resource('roles',RoleController::class)->names('roles');
Route::resource('AsignarCurso',AsignarCursosController::class)->names('AsignarCurso');
Route::resource('users',UserController::class)->only(['index','edit','update'])->names('users');
Route::resource('categories',CategoryController::class)->names('categories');
Route::resource('levels',LevelController::class)->names('levels');
Route::resource('prices',PriceController::class)->names('prices');
Route::resource('clientes',ClienteController::class)->names('clientes');
Route::resource('contacto',ContactoController::class)->names('contacto');



Route::get('galery/index',[GaleriaController::class,'index'])->name('galeria.index');
Route::get('galery/create',[GaleriaController::class,'create'])->name('galeria.create');
Route::post('galery/store',[GaleriaController::class,'store'])->name('galeria.store');



Route::get('courses',[CourseController::class,'index'])->name('courses.index');
Route::get('courses/{course}',[CourseController::class,'show'])->name('courses.show');
Route::post('courses/{course}/approved',[CourseController::class,'approved'])->name('courses.approved');
Route::get('courses/{course}/observation',[CourseController::class,'observation'])->name('courses.observation');
Route::post('courses/{course}/reject',[CourseController::class,'reject'])->name('courses.reject');