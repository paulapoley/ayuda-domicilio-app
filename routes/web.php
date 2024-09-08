<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\FamiliarController;
use App\Http\Controllers\IncidenciaController;
//use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ServicioController;
//use App\Http\Controllers\TratamientoController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    Route::resources([
        'citas' => CitaController::class,
        'incidencias' => IncidenciaController::class,
        'servicios' => ServicioController::class,
        'familiars' => FamiliarController::class,
        'profesionals' => ProfesionalController::class,
        //'pacientes' => PacienteController::class,
    ]);
    //Route::get('/pacientes-hoy', [PacienteController::class, 'pacientesHoy']);
    //Todos los usuarios pueden listar y ver el detalle de un profesional
    Route::get('/profesionals/{profesional}', [ProfesionalController::class, 'show'])->name('profesionals.show');
    Route::post('/citas/{cita}/attach-servicio', [CitaController::class, 'attach_servicio'])
        ->name('citas.attachServicio')
        ->middleware('can:attach_servicio,cita');
    Route::get('/citas/{cita}/attach-servicio', [CitaController::class, 'attach_servicio'])
        ->name('citas.attachServicio')
        ->middleware('can:attach_servicio,cita');
    Route::delete('/citas/{cita}/detach-servicio/{servicio}', [CitaController::class, 'detach_servicio'])
        ->name('citas.detachServicio')
        ->middleware('can:detach_servicio,cita');



//Solo los administradores pueden crear y borrar profesionales
//Route::middleware(['auth', 'tipo_usuario:3'])->group(function () {
 //   Route::get('/profesionals/create', [ProfesionalController::class, 'create'])->name('profesionals.create');
   // Route::post('/profesionals', [ProfesionalController::class, 'store'])->name('profesionals.store');
   // Route::delete('/profesionals/{profesional}', [ProfesionalController::class, 'destroy'])->name('profesionals.destroy');
//});
//Tanto los profesionales como los administradores pueden editar el profesional 
//Route::middleware(['auth', 'tipo_usuario:1,3'])->group(function () {
});
