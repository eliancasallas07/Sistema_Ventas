<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RecuperarClaveController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    // return view('welcome');
    return redirect()->route("home");
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* mis rutas */



//empresa
Route::get('empresa-index',[EmpresaController::class,'index'])->name('empresa.index')->middleware('verified');
Route::post('empresa-update-{id}',[EmpresaController::class,'update'])->name('empresa.update')->middleware('verified');

//test db laravel
Route::get('/test-db-laravel', function () {
    try {
        DB::connection()->getPdo();
        return '¡Conexión Laravel exitosa!';
    } catch (\Exception $e) {
        return 'Error de conexión Laravel: ' . $e->getMessage();
    }
});
