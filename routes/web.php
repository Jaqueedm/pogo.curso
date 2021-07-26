<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonesController;
use App\Http\Controllers\RegionesController;

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

Route::get('/', HomeController::class)->name('welcome');

Route::get('pokemones', [PokemonesController::class,'index'])->name('pokemones.index');

Route::post('pokemones', [PokemonesController::class,'store'])->name('pokemones.store');

Route::get('pokemones/create', [PokemonesController::class, 'create'])->name('pokemones.create')->middleware('auth');

Route::get('pokemones/{pokemon}', [PokemonesController::class, 'show'])->name('pokemones.show');

Route::get('pokemones/{pokemon}/edit', [PokemonesController::class, 'edit'])->name('pokemones.edit')->middleware('auth');

Route::put('pokemones/{pokemon}', [PokemonesController::class, 'update'])->name('pokemones.update')->middleware('auth');

Route::delete('pokemones/{pokemon}', [PokemonesController::class, 'destroy'])->name('pokemones.destroy')->middleware('auth');

Route::get('regiones', [RegionesController::class, 'index'])->name('regiones.index');

Route::post('regiones', [RegionesController::class,'store'])->name('regiones.store');

Route::get('regiones/create', [RegionesController::class, 'create'])->name('regiones.create')->middleware('auth');; 

Route::get('regiones/{region}', [RegionesController::class, 'show'])->name('regiones.show');

Route::get('regiones/{region}/edit', [RegionesController::class, 'edit'])->name('regiones.edit')->middleware('auth');

Route::put('regiones/{region}', [RegionesController::class, 'update'])->name('regiones.update')->middleware('auth');

Route::delete('regiones/{region}', [RegionesController::class, 'destroy'])->name('regiones.destroy')->middleware('auth');


//Route::resource('cursos', CursosController::class);
//->names('cursos')->parameters(['pogos' => 'cursos']);
Route::view('nosotros', 'nosotros')->name('nosotros');

//Route::get('contactanos'){

        //mail::TO('dianithamayo@gmail.com')->send($correo);
    
        //return "Mensaje enviado exitosamnete :) ";
//};


require __DIR__.'/auth.php';