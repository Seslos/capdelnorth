<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CapController;
use App\Http\Livewire\CourseStatus;
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

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('cursos',[CourseController::class,'index'])->name('courses.index');
 
route::get('cursos/{course}',[CourseController::class,'show'])->name('courses.show');


route::get('cap',[CapController::class,'index'])->name('cap.index');


route::post('courses/{course}/enrolled',[CourseController::class,'enrolled'])->middleware('auth')->name('courses.enrolled');
Route::get('course-status/{course}',CourseStatus::class)->middleware('auth')->name('courses.status');
     