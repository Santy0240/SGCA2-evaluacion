<?php

use App\Http\Controllers\vehiculoscontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//rutas vehiculos 
Route ::get('/vehiculos',[vehiculoscontroller::class,'index'])->name('vehiculos.index');
Route ::post('/vehiculos',[vehiculoscontroller::class,'store'])->name('vehiculos.store');
Route ::get('/vehiculos/create',[vehiculoscontroller::class,'create'])->name('vehiculos.create');
Route ::delete('/vehiculos/{vehiculo}',[vehiculoscontroller::class,'destroy'])->name('vehiculos.destroy');
Route ::put('/vehiculos/{vehiculo}',[vehiculoscontroller::class,'update'])->name('vehiculos.update');
Route ::get('/vehiculos/{vehiculo}/edit',[vehiculoscontroller::class,'edit'])->name('vehiculos.edit');