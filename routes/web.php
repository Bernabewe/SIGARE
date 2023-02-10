<?php

use App\Http\Controllers\ReporteController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'home']);

//Rutas de alumnos
Route::get('/reporte/consultar', [ReporteController::class, 'consultar']);
Route::get('/reporte/registrar', [ReporteController::class, 'registrar']);
Route::get('/reporte/pdf', [ReporteController::class, 'reportePdf']);

Route::get('/blank', function () {
    return view('blankpage');
});
