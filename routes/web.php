<?php

use App\Http\Controllers\clientescontroller;
use App\Http\Controllers\vehiculoscontroller;
use App\Http\Controllers\ventascontroller;
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

//rutas clientes
Route ::get('/clientes',[clientescontroller::class,'index'])->name('clientes.index');
Route ::post('/clientes',[clientescontroller::class,'store'])->name('clientes.store');
Route ::get('/clientes/create',[clientescontroller::class,'create'])->name('clientes.create');
Route ::delete('/clientes/{cliente}',[clientescontroller::class,'destroy'])->name('clientes.destroy');
Route ::put('/clientes/{cliente}',[clientescontroller::class,'update'])->name('clientes.update');
Route ::get('/clientes/{cliente}/edit',[clientescontroller::class,'edit'])->name('clientes.edit');

//rutas ventas
Route ::get('/ventas',[ventascontroller::class,'index'])->name('ventas.index');
Route ::post('/ventas',[ventascontroller::class,'store'])->name('ventas.store');
Route ::get('/ventas/create',[ventascontroller::class,'create'])->name('ventas.create');
Route ::delete('/ventas/{venta}',[ventascontroller::class,'destroy'])->name('ventas.destroy');
Route ::put('/ventas/{venta}',[ventascontroller::class,'update'])->name('ventas.update');
Route ::get('/ventas/{venta}/edit',[ventascontroller::class,'edit'])->name('ventas.edit');

