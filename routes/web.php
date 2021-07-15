<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonesController;

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

Route::get('pokemones', [PokemonesController::class,'index'])->name('pokemones.index');

Route::post('pokemones', [PokemonesController::class,'store'])->name('pokemones.store');

Route::get('pokemones/create', [PokemonesController::class, 'create'])->name('pokemones.create');

Route::get('pokemones/{pokemon}', [PokemonesController::class, 'show'])->name('pokemones.show');

Route::get('pokemones/{pokemon}/edit', [PokemonesController::class, 'edit'])->name('pokemones.edit');

Route::put('pokemones/{pokemon}', [PokemonesController::class, 'update'])->name('pokemones.update');

Route::delete('pokemones/{pokemon}', [PokemonesController::class, 'destroy'])->name('pokemones.destroy');

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
