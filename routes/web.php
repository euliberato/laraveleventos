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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']); //Mostrar registros
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); //Mostrar formulario
Route::get('/events/{id}', [EventController::class, 'show']); //Mostrar Dado específico
Route::post('/events', [EventController::class, 'store']); //Enviar dados
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth'); //Dashboard
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth'); //Rota delete recebe ID | Destroy é um padrão
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth'); //Rota para editar evento | Edit é um padrão de rota
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth'); //Nova rota que irá servir para atualizar o registro | Update é um padrão de rota


Route::get('/events', [EventController::class, 'events']);
