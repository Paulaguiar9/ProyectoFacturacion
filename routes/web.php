<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//usuarios
Route::get('/usuarios',[App\Http\Livewire\Usuarios::class,'render'])->name('usuarios')->middleware('auth');
Route::get('/usuario-add',[App\Http\Livewire\Usuarios::class,'agregar'])->name('usuario-add')->middleware('auth');
Route::post('/guardar-usuario',[App\Http\Livewire\Usuarios::class,'guardar'])->name('guardar-usuario')->middleware('auth');
Route::get('/editar-usuario/{id}',[App\Http\Livewire\Usuarios::class,'editar'])->name('editar-usuario')->middleware('auth');
Route::patch('/actualizar-usuario/{id}',[App\Http\Livewire\Usuarios::class,'actualizar'])->name('actualizar-usuario')->middleware('auth');
Route::delete('/eliminar-usuario/{id}',[App\Http\Livewire\Usuarios::class,'eliminar'])->name('eliminar-usuario')->middleware('auth');


//Categoria
Route::get('/categorias',[App\Http\Livewire\Categorias::class,'render'])->name('categorias')->middleware('auth');
Route::get('/categoria-add',[App\Http\Livewire\Categorias::class,'agregar'])->name('categoria-add')->middleware('auth');
Route::post('/guardar-categoria',[App\Http\Livewire\Categorias::class,'guardar'])->name('guardar-categoria')->middleware('auth');
Route::get('/editar-categoria/{id}',[App\Http\Livewire\Categorias::class,'editar'])->name('editar-categoria')->middleware('auth');
Route::patch('/actualizar-categoria/{id}',[App\Http\Livewire\Categorias::class,'actualizar'])->name('actualizar-categoria')->middleware('auth');
Route::delete('/eliminar-categoria/{id}',[App\Http\Livewire\Categorias::class,'eliminar'])->name('eliminar-categoria')->middleware('auth');


//Clientes
Route::get('/clientes',[App\Http\Livewire\Clientes::class,'render'])->name('clientes')->middleware('auth');
Route::get('/cliente-add',[App\Http\Livewire\Clientes::class,'agregar'])->name('cliente-add')->middleware('auth');
Route::post('/guardar-cliente',[App\Http\Livewire\Clientes::class,'guardar'])->name('guardar-cliente')->middleware('auth');
Route::get('/editar-cliente/{id}',[App\Http\Livewire\Clientes::class,'editar'])->name('editar-cliente')->middleware('auth');
Route::patch('/actualizar-cliente/{id}',[App\Http\Livewire\Clientes::class,'actualizar'])->name('actualizar-cliente')->middleware('auth');
Route::delete('/eliminar-cliente/{id}',[App\Http\Livewire\Clientes::class,'eliminar'])->name('eliminar-cliente')->middleware('auth');


//Productos
Route::get('/productos',[App\Http\Livewire\Productos::class,'render'])->name('productos')->middleware('auth');
Route::get('/producto-add',[App\Http\Livewire\Productos::class,'agregar'])->name('producto-add')->middleware('auth');
Route::post('/guardar-producto',[App\Http\Livewire\Productos::class,'guardar'])->name('guardar-producto')->middleware('auth');
Route::get('/editar-producto/{id}',[App\Http\Livewire\Productos::class,'editar'])->name('editar-producto')->middleware('auth');
Route::patch('/actualizar-producto/{id}',[App\Http\Livewire\Productos::class,'actualizar'])->name('actualizar-producto')->middleware('auth');
Route::delete('/eliminar-producto/{id}',[App\Http\Livewire\Productos::class,'eliminar'])->name('eliminar-producto')->middleware('auth');


//Ventas
Route::get('/ventas',[App\Http\Livewire\Ventas::class,'index'])->name('ventas')->middleware('auth');
Route::get('/ventas-add',[App\Http\Livewire\Ventas::class,'renderTable'])->name('ventas-add')->middleware('auth');
Route::get('/ventas/findClient',[App\Http\Livewire\Ventas::class,'findClient'])->name('ventas/findClient')->middleware('auth');
Route::get('/ventas/findProduct',[App\Http\Livewire\Ventas::class,'findProduct'])->name('ventas/findProduct')->middleware('auth');
Route::post('/ventas-save',[App\Http\Livewire\Ventas::class,'save'])->name('ventas-save')->middleware('auth');
Route::get('/ventas-detail/{id}',[App\Http\Livewire\Ventas::class,'detalle'])->name('ventas-detail')->middleware('auth');
Route::get('/ventas-pdf/{id}',[App\Http\Livewire\Ventas::class,'pdf'])->name('ventas-pdf')->middleware('auth');
Route::delete('/ventas-eliminar/{id}',[App\Http\Livewire\Ventas::class,'delete'])->name('ventas-eliminar')->middleware('auth'); 
Route::get('/report-dia',[App\Http\Livewire\Ventas::class,'reportday'])->name('report-dia')->middleware('auth');
Route::get('/report-rango',[App\Http\Livewire\Ventas::class,'reportrango'])->name('report-rango')->middleware('auth');
Route::post('/report-results',[App\Http\Livewire\Ventas::class,'reportResults'])->name('report-results')->middleware('auth');

