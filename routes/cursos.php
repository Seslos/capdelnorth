<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;

route::redirect('','student/cursos');

Route::resource('cursos', CursosController::class)->names('cursos');
