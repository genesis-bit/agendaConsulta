<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
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
Route::middleware(['auth', 'verified'])->group(function () { 
    Route::get('/admin', [AdminController::class,'index'])->name('admin'); 
    Route::post('/user/medico', [RegisteredUserController::class, 'storeMedico'])->name('medico.add'); 
    Route::resources([
        'paciente'=>PacienteController::class,
        'medico'=>MedicoController::class
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/*
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/consulta',function () {
        return view('consulta');
    });
    Route::get('/medico',function () {
        return view('medico');
    });
    Route::get('/paciente',function () {
        return view('paciente');
    });
    Route::post('/paciente',function (Request $request) {
        return  $request->all();
    })->name('cadastrarP');
    Route::resource('paciente',PacienteController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/rota1', function () {
    return view('filho');
})->middleware(['auth', 'verified'])->name('rota1');
*/
