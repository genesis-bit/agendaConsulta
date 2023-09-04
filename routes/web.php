<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/consulta', function () {
    return view('consulta');
});
Route::get('/medico', function () {
    return view('medico');
});
Route::get('/paciente', function () {
    return view('paciente');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/quarto', function () {
    return view('quarto');
});
