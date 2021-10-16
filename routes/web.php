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

Route::get('/home', [EventController::class, 'getHomePage']);
Route::get('/create', [EventController::class, 'getForm']);
Route::post('/create', [EventController::class, 'createEvent']);
Route::get('/events/edit', [EventController::class, 'getEditDetail']);
Route::post('/events/edit', [EventController::class, 'processEdit']);
Route::get('/events', [EventController::class, 'getAll']);
Route::get('/events/delete', [EventController::class, 'getDeleteDetail']);
Route::post('/events/delete', [EventController::class, 'processDelete']);
