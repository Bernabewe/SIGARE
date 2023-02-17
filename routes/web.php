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
Route::get('/reporte/individual', [ReporteController::class, 'registrarIndividual']);
Route::get('/reporte/grupal', [ReporteController::class, 'registrarGrupal']);
Route::get('/reporte/justificante', [ReporteController::class, 'registrarJustificante']);
Route::get('/reporte/baja', [ReporteController::class, 'registrarBaja']);
Route::get('/reporte/cartaBuenaConducta', [ReporteController::class, 'registrarCartaBuenaConducta']);
Route::get('/reporte/cartaCondicional', [ReporteController::class, 'registrarCartaCondicional']);
Route::get('/reporte/cartaCompromiso', [ReporteController::class, 'registrarCartaCompromiso']);
Route::get('/reporte/canalizacion', [ReporteController::class, 'registrarCanalizacion']);
Route::get('/reporte/pdfIndividual', [ReporteController::class, 'pdfIndividual']);
Route::get('/reporte/pdfJustificante', [ReporteController::class, 'pdfJustificante']);

Route::get('/blank', function () {
    return view('blankpage');
});

/* Route::get('/reporte/pdf', function () {
    return view('PDF.justificante');
}); */