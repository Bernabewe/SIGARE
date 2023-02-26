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

//Reporte individual
Route::get('/reporte/individual', [ReporteController::class, 'registrarIndividual']);
Route::post('/reporte/individual', [ReporteController::class, 'registrarIndividualBuscar']);
Route::post('/reporte/individual/guardar', [ReporteController::class, 'registrarIndividualGuardar']);

//Repote grupal
Route::get('/reporte/grupal', [ReporteController::class, 'registrarGrupal']);

//Justificante
Route::get('/reporte/justificante', [ReporteController::class, 'registrarJustificante']);
Route::post('/reporte/justificante', [ReporteController::class, 'registrarJustificanteBuscar']);
Route::post('/reporte/justificante/guardar', [ReporteController::class, 'registrarJustificanteGuardar']);

//Baja
Route::get('/reporte/baja', [ReporteController::class, 'registrarBaja']);
Route::post('/reporte/baja', [ReporteController::class, 'registrarBajaBuscar']);
Route::post('/reporte/baja/guardar', [ReporteController::class, 'registrarBajaGuardar']);

//Carta buena conducta
Route::get('/reporte/cartaBuenaConducta', [ReporteController::class, 'registrarCartaBuenaConducta']);
Route::post('/reporte/cartaBuenaConducta', [ReporteController::class, 'registrarCartaBuenaConductaBuscar']);
Route::post('/reporte/cartaBuenaConducta/guardar', [ReporteController::class, 'registrarCartaBuenaConductaGuardar']);

//Carta condicional
Route::get('/reporte/cartaCondicional', [ReporteController::class, 'registrarCartaCondicional']);
Route::post('reporte/cartaCondicional', [ReporteController::class, 'registrarCartaCondicionalBuscar']);
Route::post('reporte/cartaCondicional/guardar', [ReporteController::class, 'registrarCartaCondicionalGuardar']);

//Carta compromiso
Route::get('/reporte/cartaCompromiso', [ReporteController::class, 'registrarCartaCompromiso']);
Route::post('reporte/cartaCompromiso', [ReporteController::class, 'registrarCartaCompromisoBuscar']);
Route::post('reporte/cartaCompromiso/guardar', [ReporteController::class, 'registrarCartaCompromisoGuardar']);

//Canalizacion
Route::get('/reporte/canalizacion', [ReporteController::class, 'registrarCanalizacion']);
Route::post('reporte/canalizacion', [ReporteController::class, 'registrarCanalizacionBuscar']);
Route::post('reporte/canalizacion/guardar', [ReporteController::class, 'registrarCanalizacionGuardar']);

//PDFs
Route::get('/reporte/pdfIndividual', [ReporteController::class, 'pdfIndividual']);
Route::get('/reporte/pdfJustificante', [ReporteController::class, 'pdfJustificante']);
Route::get('/reporte/pdfBaja', [ReporteController::class, 'pdfBaja']);
Route::get('/reporte/pdfReporteGrupal', [ReporteController::class, 'pdfReporteGrupal']);
Route::get('/reporte/pdfCanalizacion', [ReporteController::class, 'pdfCanalizacion']);
Route::get('/reporte/pdfCartaCompromiso', [ReporteController::class, 'pdfCartaCompromiso']);
Route::get('/reporte/pdfCartaBuenaConducta', [ReporteController::class, 'pdfCartaBuenaConducta']);
Route::get('/reporte/pdfCartaCondicional', [ReporteController::class, 'pdfCartaCondicional']);

Route::get('/blank', function () {
    return view('blankpage');
});

/* Route::get('/reporte/pdf', function () {
    return view('PDF.justificante');
}); */