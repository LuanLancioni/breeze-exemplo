<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DepartamentosController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PrincipalController::class, 'principal'])->name('index');

Route::get('/home', [PrincipalController::class, 'principal'])->name('index');

Route::get('/cursos', [CursosController::class, 'cursos'])->name('cursos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

Route::get('/departamentos', [DepartamentosController::class, 'departamentos'])->name('departamentos');

require __DIR__.'/auth.php';
