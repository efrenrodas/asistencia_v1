<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpresaEmpleadoController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('empresas', EmpresaController::class);

Route::resource('empresa-empleados', EmpresaEmpleadoController::class);

Route::post('codigo',[EmpresaEmpleadoController::class,'codigo'])->name('codigo.actualiza');

Route::get('unirme', function () {
    return view('empresa-empleado.unirme');
})->name('emp.unirme');