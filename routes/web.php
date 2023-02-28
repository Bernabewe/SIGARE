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
Route::get('/reporte/editar/{id}', [ReporteController::class, 'editar']);

//Reporte individual
Route::get('/reporte/individual', [ReporteController::class, 'registrarIndividual']);
Route::post('/reporte/individual', [ReporteController::class, 'registrarIndividualBuscar']);
Route::post('/reporte/individual/guardar', [ReporteController::class, 'registrarIndividualGuardar']);
Route::post('/reporte/individual/actualizar/{id}', [ReporteController::class, 'actualizarIndividual']);

//Repote grupal
Route::get('/reporte/grupal', [ReporteController::class, 'registrarGrupal']);

//Justificante
Route::get('/reporte/justificante', [ReporteController::class, 'registrarJustificante']);
Route::post('/reporte/justificante', [ReporteController::class, 'registrarJustificanteBuscar']);
Route::post('/reporte/justificante/guardar', [ReporteController::class, 'registrarJustificanteGuardar']);
Route::post('/reporte/justificante/actualizar/{id}', [ReporteController::class, 'actualizar']);

//Baja
Route::get('/reporte/baja', [ReporteController::class, 'registrarBaja']);
Route::post('/reporte/baja', [ReporteController::class, 'registrarBajaBuscar']);
Route::post('/reporte/baja/guardar', [ReporteController::class, 'registrarBajaGuardar']);
Route::post('/reporte/baja/actualizar/{id}', [ReporteController::class, 'actualizar']);

//Carta buena conducta
Route::get('/reporte/cartaBuenaConducta', [ReporteController::class, 'registrarCartaBuenaConducta']);
Route::post('/reporte/cartaBuenaConducta', [ReporteController::class, 'registrarCartaBuenaConductaBuscar']);
Route::post('/reporte/cartaBuenaConducta/guardar', [ReporteController::class, 'registrarCartaBuenaConductaGuardar']);

//Carta condicional
Route::get('/reporte/cartaCondicional', [ReporteController::class, 'registrarCartaCondicional']);
Route::post('reporte/cartaCondicional', [ReporteController::class, 'registrarCartaCondicionalBuscar']);
Route::post('reporte/cartaCondicional/guardar', [ReporteController::class, 'registrarCartaCondicionalGuardar']);
Route::post('reporte/cartaCondicional/actualizar/{id}', [ReporteController::class, 'actualizar']);

//Carta compromiso
Route::get('/reporte/cartaCompromiso', [ReporteController::class, 'registrarCartaCompromiso']);
Route::post('reporte/cartaCompromiso', [ReporteController::class, 'registrarCartaCompromisoBuscar']);
Route::post('reporte/cartaCompromiso/guardar', [ReporteController::class, 'registrarCartaCompromisoGuardar']);
Route::post('reporte/cartaCompromiso/actualizar/{id}', [ReporteController::class, 'actualizar']);

//Canalizacion
Route::get('/reporte/canalizacion', [ReporteController::class, 'registrarCanalizacion']);
Route::post('reporte/canalizacion', [ReporteController::class, 'registrarCanalizacionBuscar']);
Route::post('reporte/canalizacion/guardar', [ReporteController::class, 'registrarCanalizacionGuardar']);
Route::post('reporte/canalizacion/actulizar/{id}', [ReporteController::class, 'actualizar']);

//PDFs
Route::get('/reporte/pdf/{id}', [PDFController::class, 'pdfMaster']);
Route::get('/reporte/pdfIndividual', [PDFController::class, 'pdfIndividual']);
Route::get('/reporte/pdfJustificante', [PDFController::class, 'pdfJustificante']);
Route::get('/reporte/pdfBaja', [PDFController::class, 'pdfBaja']);
Route::get('/reporte/pdfReporteGrupal', [PDFController::class, 'pdfGrupal']);
Route::get('/reporte/pdfCanalizacion', [PDFController::class, 'pdfCanalizacion']);
Route::get('/reporte/pdfCartaCompromiso', [PDFController::class, 'pdfCartaCompromiso']);
Route::get('/reporte/pdfCartaBuenaConducta', [PDFController::class, 'pdfCartaBuenaConducta']);
Route::get('/reporte/pdfCartaCondicional', [PDFController::class, 'pdfCartaCondicional']);

Route::get('/blank', function () {
    return view('blankpage');
});