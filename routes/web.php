<?php

use App\Http\Controllers\ReporteController;
use App\Http\Controllers\PDFController;
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
Route::get('/reporte/eliminar/{id}', [ReporteController::class, 'eliminar']);

//Reporte individual
Route::get('/reporte/individual', [ReporteController::class, 'registrarIndividual']);
Route::get('/reporte/Individual/editar/{id}', [ReporteController::class, 'editarIndividual']);
Route::post('/reporte/individual/actualizar/{id}', [ReporteController::class, 'actualizarIndividual']);
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

//Carta compromiso
Route::get('/reporte/cartaCompromiso', [ReporteController::class, 'registrarCartaCompromiso']);

//Canalizacion
Route::get('/reporte/canalizacion', [ReporteController::class, 'registrarCanalizacion']);

//PDFs
Route::get('/reporte/pdfIndividual', [PDFController::class, 'pdfIndividual']);
Route::get('/reporte/pdfJustificante', [PDFController::class, 'pdfJustificante']);
Route::get('/reporte/pdfBaja', [PDFController::class, 'pdfBaja']);
Route::get('/reporte/pdfReporteGrupal', [PDFController::class, 'pdfReporteGrupal']);
Route::get('/reporte/pdfCanalizacion', [PDFController::class, 'pdfCanalizacion']);
Route::get('/reporte/pdfCartaCompromiso', [PDFController::class, 'pdfCartaCompromiso']);
Route::get('/reporte/pdfCartaBuenaConducta', [PDFController::class, 'pdfCartaBuenaConducta']);
Route::get('/reporte/pdfCartaCondicional', [PDFController::class, 'pdfCartaCondicional']);

Route::get('/blank', function () {
    return view('blankpage');
});