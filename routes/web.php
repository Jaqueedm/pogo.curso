<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('cursos', [CursosController::class,'index'])->name('cursos.index');

Route::post('cursos', [CursosController::class,'store'])->name('cursos.store');

Route::get('cursos/create', [CursosController::class, 'create'])->name('cursos.create');

Route::get('cursos/{curso}', [CursosController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursosController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursosController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursosController::class, 'destroy'])->name('cursos.destroy');

//Route::resource('cursos', CursosController::class);
//->names('cursos')->parameters(['pogos' => 'cursos']);
Route::view('nosotros', 'nosotros')->name('nosotros');

//Route::get('contactanos'){

        //mail::TO('dianithamayo@gmail.com')->send($correo);
    
        //return "Mensaje enviado exitosamnete :) ";
//};

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('prueba', function () {
    return "exito";
})->middleware('auth', 'age');
