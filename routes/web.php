<?php

use App\Http\Controllers\EventController;
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


Route::get('/', [EventController::class, 'index'])->name('events');
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{event:id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{event:id}/edit', [EventController::class, 'edit']);
Route::delete('/events/{event:id}', [EventController::class, 'destroy']);
Route::patch('/events/{event:id}', [EventController::class, 'update']);
